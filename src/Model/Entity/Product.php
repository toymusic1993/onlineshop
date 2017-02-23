<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property int $creator_id
 * @property string $image_url
 * @property string $description
 * @property float $price
 * @property int $quantity
 * @property string $tags
 * @property bool $status
 * @property \Cake\I18n\Time $date_created
 * @property \Cake\I18n\Time $date_updated
 * @property int $category_id
 *
 * @property \App\Model\Entity\Creator $creator
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\OrderProduct[] $order_product
 * @property \App\Model\Entity\ProductReview[] $product_reviews
 */
class Product extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
