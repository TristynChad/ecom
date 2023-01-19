<?php

class Adminproduct extends Product{

    public function addProduct($inputs, $images){
        $data = [
            "product_title" => $inputs["product_title"],
            "product_description" => $inputs["product_description"],
            "product_price" => $inputs["product_price"],
            "product_discount_amount" => 0 ,
            "product_quantity" => $inputs["product_quantity"],
            "product_image1" => $images[0]->new_name,
            "product_image2" => $images[1]->new_name,
            "product_image3" => $images[2]->new_name,
            "product_image4" => $images[3]->new_name,
            "product_status" => $inputs["product_status"],
            "product_category" => $inputs["product_category"],
           
        ];

        $sql = "INSERT INTO `products`
        (`product_id`,
        `product_title`,
        `product_description`,
        `product_price`,
        `product_discount_amount`,
        `product_quantity`,
        `product_image1`,
        `product_image2`,
        `product_image3`,
        `product_image4`,
        `product_created`,
        `product_status`,
        `product_category`)
        VALUES
        (
        NULL,
        :product_title,
        :product_description,
        :product_price,
        :product_discount_amount,
        :product_quantity,
        :product_image1,
        :product_image2,
        :product_image3,
        :product_image4,
        current_timestamp(),
        :product_status,
        :product_category
        );
        
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);

    }



    public function updateProduct($id, $inputs, $images){
        $data = [
            "product_title" => $inputs["product_title"],
            "product_description" => $inputs["product_description"],
            "product_price" => $inputs["product_price"],
            "product_discount_amount" => 0 ,
            "product_quantity" => $inputs["product_quantity"],
            "product_image1" => $images[0]->new_name,
            "product_image2" => $images[1]->new_name,
            "product_image3" => $images[2]->new_name,
            "product_image4" => $images[3]->new_name,
            "product_status" => $inputs["product_status"],
            "product_category" => $inputs["product_category"],
            "product_id" => $id
           
        ];

        $sql = "UPDATE `products`
        SET
        `product_title` = :product_title,
        `product_description` = :product_description,
        `product_price` = :product_price,
        `product_discount_amount` = :product_discount_amount,
        `product_quantity` = :product_quantity,
        `product_image1` = :product_image1,
        `product_image2` = :product_image2,
        `product_image3` = :product_image3,
        `product_image4` = :product_image4,
        `product_status` = :product_status,
        `product_category` = :product_category
        WHERE `product_id` = :product_id;
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);

    }







}