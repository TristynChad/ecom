<?php
class Order
{

    protected $pdo = null;

    /**
     * Constructor that takes pdo connection
     */
    public function __construct(Database $pdo)
    {
        if (!isset($pdo->pdo)) return null;
        $this->pdo = $pdo->pdo;
    }

    public function insertOrder($data)
    {
   




        
        $sql = "INSERT INTO `orders`
        (`order_id`,
        `user_id`,
        `subtotal`,
        `total`,
        `total_discount_amount`,
        `order_created`,
        `payment`,
        `payment_id`)
        VALUES
        (
        NULL,
        :user_id,
        :subtotal,
        :total,
        :total_discount_amount,
        current_timestamp(),
        :payment,
        :payment_id 
        );
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
        return $this->pdo->lastInsertId();
    }

    public function insertOrderDetails($cart_details, $order_id){
        $insert_data = [];
        $update_data = [];

        foreach ($cart_details as $data) {
            
            array_push($insert_data, [
                "order_id" => $order_id,
                "product_id" => $data["product_id"],
                "order_details_price" => $data["product_price"],
                "order_details_quantity" => $data["cart_quantity"]
            ]);

            array_push($update_data, [
                "cart_id" => $data["cart_id"]
            ]);
        }

        $this->multiInsert($insert_data);
        $this->multiUpdate($update_data);
    }

    public function multiInsert($data)
    {
    

        $sql = "INSERT INTO `order_details`
        (`order_details_id`,
        `order_id`,
        `product_id`,
        `order_details_price`,
        `order_details_quantity`,
        `order_details_created`)
        VALUES
        (
        NULL,
        :order_id,
        :product_id,
        :order_details_price,
        :order_details_quantity,
        current_timestamp()
        );
        
        ";

        $stmt = $this->pdo->prepare($sql);
        foreach($data as $array){
            $stmt->execute($array);
        }
    }


    public function multiUpdate($data){
        $sql = "UPDATE cart SET cart_status = 'purchased' WHERE cart_id = :cart_id";
        $stmt = $this->pdo->prepare($sql);
        foreach($data as $array){
            $stmt->execute($array);
        }
    }



}
