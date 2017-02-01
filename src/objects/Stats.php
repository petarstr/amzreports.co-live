<?php
namespace Keepa\objects;

/**
 * Contains statistic values.
 * Only set if the stats parameter was used in the Product Request. Part of the {@link Product}
 */
class Stats
{

    /**
     * Contains the prices / ranks of the product of the time we last updated it.
     * <p>Uses {@link Product.CsvType} indexing.</p>
     * The price is an integer of the respective Amazon locale's smallest currency unit (e.g. euro cents or yen).
     * If no offer was available in the given interval (e.g. out of stock) the price has the value -1.
     * @var int[]|null
     */
    public $current = null;

    /**
     * Contains the weighted mean for the interval specified in the product request's stats parameter.<br>
     * <p>Uses {@link Product.CsvType} indexing.</p>
     * If no offer was available in the given interval or there is insufficient data it has the value -1.
     * @var int[]|null
     */
    public $avg = null;

    /**
     * Contains the weighted mean for the last 30 days.<br>
     * <p>Uses {@link Product.CsvType} indexing.</p>
     * If no offer was available in the given interval or there is insufficient data it has the value -1.
     * @var int[]|null
     */
    public $avg30 = null;


    /**
     * Contains the weighted mean for the last 90 days.<br>
     * <p>Uses {@link Product.CsvType} indexing.</p>
     * If no offer was available in the given interval or there is insufficient data it has the value -1.
     * @var int[]|null
     */
    public $avg90 = null;

    /**
     * Contains the lowest prices registered for this product. <br>
     * First dimension uses {@link Product.CsvType} indexing <br>
     * Second dimension is either null, if there is no data available for the price type, or
     * an array of the size 2 with the first value being the time of the extreme point (in Keepa time minutes) and the second one the respective extreme value.
     * <br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var mixed int[][]
     */
    public $min = null;

    /**
     * Contains the lowest prices registered in the interval specified in the product request's stats parameter.<br>
     * First dimension uses {@link Product.CsvType} indexing <br>
     * Second dimension is either null, if there is no data available for the price type, or
     * an array of the size 2 with the first value being the time of the extreme point (in Keepa time minutes) and the second one the respective extreme value.
     * <br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var mixed int[][]
     */
    public $minInInterval = null;

    /**
     * Contains the highest prices registered for this product. <br>
     * First dimension uses {@link Product.CsvType} indexing <br>
     * Second dimension is either null, if there is no data available for the price type, or
     * an array of the size 2 with the first value being the time of the extreme point (in Keepa time minutes) and the second one the respective extreme value.<br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var mixed int[][]
     */
    public $max = null;

    /**
     * Contains the highest prices registered in the interval specified in the product request's stats parameter.<br>
     * First dimension uses {@link Product.CsvType} indexing <br>
     * Second dimension is either null, if there is no data available for the price type, or
     * an array of the size 2 with the first value being the time of the extreme point (in Keepa time minutes) and the second one the respective extreme value.<br>
     * Use {@link KeepaTime#keepaMinuteToUnixInMillis(int)} (long)} to get an uncompressed timestamp (Unix epoch time).
     * @var mixed int[][]
     */
    public $maxInInterval = null;

    /**
     * Contains the out of stock percentage in the interval specified in the product request's stats parameter.<br>
     * <p>Uses {@link Product.CsvType} indexing.</p>
     * It has the value -1 if there is insufficient data or the CsvType is not a price.<br>
     * <p>Examples: 0 = never was out of stock, 100 = was out of stock 100% of the time, 25 = was out of stock 25% of the time</p>
     * @var mixed int[][]
     */
    public $outOfStockPercentageInInterval = null;
}
