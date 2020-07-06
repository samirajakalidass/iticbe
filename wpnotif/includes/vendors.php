<?php

if (!defined('ABSPATH')) {
    exit;
}

final class WPNotif_Vendor_Notifications
{
    public static $type = 'vendor';
    protected static $_instance = null;

    /**
     *  Constructor.
     */
    public function __construct()
    {
        $this->init_hooks();
    }

    private function init_hooks()
    {
        $this->vendor_notifications_hooks();
        add_filter('wpnotif_filter_' . self::$type . '_message', array($this, 'item_placeholder'), 10, 2);

        add_filter('wpnotif_' . self::$type . '_placeholder_args', array($this, 'advance_item_placeholder'), 10, 4);

        add_filter('wpnotif_notification_options_' . self::$type, array($this, 'notification_options'), 10);
        add_filter('wpnotif_notification_options_product', array($this, 'notification_options'), 10);

    }

    public function vendor_notifications_hooks()
    {
        add_action('wpnotif_order_status_change', array($this, 'order_trigger'), 10);
    }

    public static function instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function notification_options($values)
    {
        $values['identifier'] = 'vendor';
        $values['different_gateway_content'] = 'off';
        return $values;
    }

    public function order_trigger($order_id)
    {
        $vendors = array();
        $order = new WC_Order($order_id);
        foreach ($order->get_items() as $item_id => $item) {
            $product_id = $item->get_product_id();
            $vendor_id = get_post_field('post_author', $product_id);

            if (array_key_exists($vendor_id, $vendors)) {
                $vendor_items[] = $item;
            } else {
                $vendor_items = array($item);
            }
            $vendors[$vendor_id] = $vendor_items;

        }
        $this->process($vendors, $order);
    }

    public function process($vendors, $order)
    {

        foreach ($vendors as $vendor_id => $items) {
            $vendor = get_user_by('ID', $vendor_id);

            if (!$vendor || $vendor == null) continue;

            $key = 'wc-' . $order->get_status();
            $notification_data = array('items' => $items, 'order' => $order);
            $this->notify($key, $vendor_id, self::$type, $notification_data);
        }
    }

    public function notify_stocks($key, $type, $product)
    {
        $product_id = $product->get_id();
        $vendor_id = get_post_field('post_author', $product_id);
        $this->notify($key, $vendor_id, $type, $product);
    }

    public function notify($key, $vendor_id, $data_type, $notification_data)
    {
        $notification_data = WPNotif::data_type($data_type, $notification_data, 2);
        $data = WPNotif_Handler::instance()->notify_user($vendor_id, $notification_data, $key, 1);

        if ($data == -10) {
            $fail = true;
        }

        if (WPNotif_Handler::isWhatsappEnabled()) {
            $data = WPNotif_Handler::instance()->notify_user($vendor_id, $notification_data, $key, 1001);
        }
    }

    public function advance_item_placeholder($value, $placeholder, $msg, $data)
    {
        if (strpos($placeholder, 'vendor-') === 0) {
            $items = $data['items'];
            $meta_key = str_replace('vendor-', '', $placeholder);

            $item_meta = array();
            foreach ($items as $item) {
                $item_value = $item->get_meta($meta_key);
                if (!empty($item_value)) {
                    $item_meta[] = $item->get_meta($meta_key);
                }
            }

            if (!empty($item_value)) {
                return implode(", ", $item_value);
            }
        }

        return $value;
    }

    public function item_placeholder($msg, $data)
    {
        $items = $data['items'];
        $item_names = array();
        $item_details = array();
        $quantity = 0;
        $total = 0;

        foreach ($items as $item) {
            $item_names[] = $item->get_name();
            $item_details[] = $item->get_name() . ' x ' . $item->get_quantity();
            $quantity += $item->get_quantity();
            $total += $item->get_total();
        }
        $placeholder_values = array(
            '{{vendor-product-names}}' => implode(", ", $item_names),
            '{{vendor-total-items}}' => $quantity,
            '{{vendor-order-amount}}' => $total,
            '{{vendor-order-items}}' => implode(", ", $item_details),
        );
        $msg = str_replace(array_keys($placeholder_values), $placeholder_values, $msg);

        return $msg;
    }
}