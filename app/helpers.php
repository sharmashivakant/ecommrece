<?php
    use \ShoppingCart as Cart;
     /**
     * Return total tax of cart.
     *
     * @return
     */
    if (! function_exists('totalTax')) {
        function totalTax()
        {
            $tax  = 0;
            $cart = Cart::all();
            //
            if ($cart->isEmpty()) {
                return $tax;
            }
            foreach ($cart as $row) {
                $tax += $row->tax;
            }
            return $tax;
        }
    }
