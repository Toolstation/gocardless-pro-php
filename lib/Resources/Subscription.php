<?php
/**
 * WARNING: Do not edit by hand, this file was generated by Crank:
 *
 * https://github.com/gocardless/crank
 */

namespace GoCardlessPro\Resources;

/**
 * A thin wrapper around a subscription, providing access to its
 * attributes
 *
 * @property-read $amount
 * @property-read $app_fee
 * @property-read $count
 * @property-read $created_at
 * @property-read $currency
 * @property-read $day_of_month
 * @property-read $earliest_charge_date_after_resume
 * @property-read $end_date
 * @property-read $id
 * @property-read $interval
 * @property-read $interval_unit
 * @property-read $links
 * @property-read $metadata
 * @property-read $month
 * @property-read $name
 * @property-read $payment_reference
 * @property-read $retry_if_possible
 * @property-read $start_date
 * @property-read $status
 * @property-read $upcoming_payments
 */
class Subscription extends BaseResource
{
    protected $model_name = "Subscription";

    /**
     * Amount in the lowest denomination for the currency (e.g. pence in GBP,
     * cents in EUR).
     */
    protected $amount;

    /**
     * The amount to be deducted from each payment as an app fee, to be paid to
     * the partner integration which created the subscription, in the lowest
     * denomination for the currency (e.g. pence in GBP, cents in EUR).
     */
    protected $app_fee;

    /**
     * The total number of payments that should be taken by this subscription.
     */
    protected $count;

    /**
     * Fixed [timestamp](#api-usage-time-zones--dates), recording when this
     * resource was created.
     */
    protected $created_at;

    /**
     * [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency
     * code. Currently "AUD", "CAD", "DKK", "EUR", "GBP", "NZD", "SEK" and "USD"
     * are supported.
     */
    protected $currency;

    /**
     * As per RFC 2445. The day of the month to charge customers on. `1`-`28` or
     * `-1` to indicate the last day of the month.
     */
    protected $day_of_month;

    /**
     * The earliest date that will be used as a `charge_date` on payments
     * created for this subscription if it is resumed. Only present for `paused`
     * subscriptions.
     * This value will change over time.
     */
    protected $earliest_charge_date_after_resume;

    /**
     * Date on or after which no further payments should be created.
     * <br />
     * If this field is blank and `count` is not specified, the subscription
     * will continue forever.
     * <br />
     * <p class="deprecated-notice"><strong>Deprecated</strong>: This field will
     * be removed in a future API version. Use `count` to specify a number of
     * payments instead.</p>
     */
    protected $end_date;

    /**
     * Unique identifier, beginning with "SB".
     */
    protected $id;

    /**
     * Number of `interval_units` between customer charge dates. Must be greater
     * than or equal to `1`. Must result in at least one charge date per year.
     * Defaults to `1`.
     */
    protected $interval;

    /**
     * The unit of time between customer charge dates. One of `weekly`,
     * `monthly` or `yearly`.
     */
    protected $interval_unit;

    /**
     * 
     */
    protected $links;

    /**
     * Key-value store of custom data. Up to 3 keys are permitted, with key
     * names up to 50 characters and values up to 500 characters.
     */
    protected $metadata;

    /**
     * Name of the month on which to charge a customer. Must be lowercase. Only
     * applies
     * when the interval_unit is `yearly`.
     */
    protected $month;

    /**
     * Optional name for the subscription. This will be set as the description
     * on each payment created. Must not exceed 255 characters.
     */
    protected $name;

    /**
     * An optional payment reference. This will be set as the reference on each
     * payment
     * created and will appear on your customer's bank statement. See the
     * documentation for
     * the [create payment endpoint](#payments-create-a-payment) for more
     * details.
     * 
     * <p class="restricted-notice"><strong>Restricted</strong>: You need your
     * own Service User Number to specify a payment reference for Bacs
     * payments.</p>
     */
    protected $payment_reference;

    /**
     * On failure, automatically retry payments using [intelligent
     * retries](#success-intelligent-retries). Default is `false`.
     */
    protected $retry_if_possible;

    /**
     * The date on which the first payment should be charged. Must be on or
     * after the [mandate](#core-endpoints-mandates)'s
     * `next_possible_charge_date`. When left blank and `month` or
     * `day_of_month` are provided, this will be set to the date of the first
     * payment. If created without `month` or `day_of_month` this will be set as
     * the mandate's `next_possible_charge_date`
     */
    protected $start_date;

    /**
     * One of:
     * <ul>
     * <li>`pending_customer_approval`: the subscription is waiting for customer
     * approval before becoming active</li>
     * <li>`customer_approval_denied`: the customer did not approve the
     * subscription</li>
     * <li>`active`: the subscription is currently active and will continue to
     * create payments</li>
     * <li>`finished`: all of the payments scheduled for creation under this
     * subscription have been created</li>
     * <li>`cancelled`: the subscription has been cancelled and will no longer
     * create payments</li>
     * <li>`paused`: the subscription has been paused and will not create
     * payments</li>
     * </ul>
     */
    protected $status;

    /**
     * Up to 10 upcoming payments with their amounts and charge dates.
     */
    protected $upcoming_payments;

}
