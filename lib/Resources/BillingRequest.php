<?php
/**
 * WARNING: Do not edit by hand, this file was generated by Crank:
 *
 * https://github.com/gocardless/crank
 */

namespace GoCardlessPro\Resources;

/**
 * A thin wrapper around a billing_request, providing access to its
 * attributes
 *
 * @property-read $actions
 * @property-read $auto_fulfil
 * @property-read $created_at
 * @property-read $id
 * @property-read $links
 * @property-read $mandate_request
 * @property-read $metadata
 * @property-read $payment_request
 * @property-read $resources
 * @property-read $status
 */
class BillingRequest extends BaseResource
{
    protected $model_name = "BillingRequest";

    /**
     * List of actions that can be performed before this billing request can be
     * fulfilled.
     */
    protected $actions;

    /**
     * Should the billing request be fulfilled as soon as it's ready (true by
     * default)
     */
    protected $auto_fulfil;

    /**
     * Fixed [timestamp](#api-usage-time-zones--dates), recording when this
     * resource was created.
     */
    protected $created_at;

    /**
     * Unique identifier, beginning with "BRQ".
     */
    protected $id;

    /**
     * 
     */
    protected $links;

    /**
     * Request for a mandate
     */
    protected $mandate_request;

    /**
     * Key-value store of custom data. Up to 3 keys are permitted, with key
     * names up to 50 characters and values up to 500 characters.
     */
    protected $metadata;

    /**
     * Request for a one-off strongly authorised payment
     */
    protected $payment_request;

    /**
     * 
     */
    protected $resources;

    /**
     * One of:
     * <ul>
     * <li>`pending`: the billing_request is pending and can be used</li>
     * <li>`ready_to_fulfil`: the billing_request is ready to fulfil</li>
     * <li>`fulfilled`: the billing_request has been fulfilled and a payment
     * created</li>
     * <li>`cancelled`: the billing_request has been cancelled and cannot be
     * used</li>
     * </ul>
     */
    protected $status;

}
