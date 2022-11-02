<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/errors/account_budget_proposal_error.proto

namespace Google\Ads\GoogleAds\V11\Errors\AccountBudgetProposalErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible account budget proposal errors.
 *
 * Protobuf type <code>google.ads.googleads.v11.errors.AccountBudgetProposalErrorEnum.AccountBudgetProposalError</code>
 */
class AccountBudgetProposalError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The field mask must be empty for create/end/remove proposals.
     *
     * Generated from protobuf enum <code>FIELD_MASK_NOT_ALLOWED = 2;</code>
     */
    const FIELD_MASK_NOT_ALLOWED = 2;
    /**
     * The field cannot be set because of the proposal type.
     *
     * Generated from protobuf enum <code>IMMUTABLE_FIELD = 3;</code>
     */
    const IMMUTABLE_FIELD = 3;
    /**
     * The field is required because of the proposal type.
     *
     * Generated from protobuf enum <code>REQUIRED_FIELD_MISSING = 4;</code>
     */
    const REQUIRED_FIELD_MISSING = 4;
    /**
     * Proposals that have been approved cannot be cancelled.
     *
     * Generated from protobuf enum <code>CANNOT_CANCEL_APPROVED_PROPOSAL = 5;</code>
     */
    const CANNOT_CANCEL_APPROVED_PROPOSAL = 5;
    /**
     * Budgets that haven't been approved cannot be removed.
     *
     * Generated from protobuf enum <code>CANNOT_REMOVE_UNAPPROVED_BUDGET = 6;</code>
     */
    const CANNOT_REMOVE_UNAPPROVED_BUDGET = 6;
    /**
     * Budgets that are currently running cannot be removed.
     *
     * Generated from protobuf enum <code>CANNOT_REMOVE_RUNNING_BUDGET = 7;</code>
     */
    const CANNOT_REMOVE_RUNNING_BUDGET = 7;
    /**
     * Budgets that haven't been approved cannot be truncated.
     *
     * Generated from protobuf enum <code>CANNOT_END_UNAPPROVED_BUDGET = 8;</code>
     */
    const CANNOT_END_UNAPPROVED_BUDGET = 8;
    /**
     * Only budgets that are currently running can be truncated.
     *
     * Generated from protobuf enum <code>CANNOT_END_INACTIVE_BUDGET = 9;</code>
     */
    const CANNOT_END_INACTIVE_BUDGET = 9;
    /**
     * All budgets must have names.
     *
     * Generated from protobuf enum <code>BUDGET_NAME_REQUIRED = 10;</code>
     */
    const BUDGET_NAME_REQUIRED = 10;
    /**
     * Expired budgets cannot be edited after a sufficient amount of time has
     * passed.
     *
     * Generated from protobuf enum <code>CANNOT_UPDATE_OLD_BUDGET = 11;</code>
     */
    const CANNOT_UPDATE_OLD_BUDGET = 11;
    /**
     * It is not permissible a propose a new budget that ends in the past.
     *
     * Generated from protobuf enum <code>CANNOT_END_IN_PAST = 12;</code>
     */
    const CANNOT_END_IN_PAST = 12;
    /**
     * An expired budget cannot be extended to overlap with the running budget.
     *
     * Generated from protobuf enum <code>CANNOT_EXTEND_END_TIME = 13;</code>
     */
    const CANNOT_EXTEND_END_TIME = 13;
    /**
     * A purchase order number is required.
     *
     * Generated from protobuf enum <code>PURCHASE_ORDER_NUMBER_REQUIRED = 14;</code>
     */
    const PURCHASE_ORDER_NUMBER_REQUIRED = 14;
    /**
     * Budgets that have a pending update cannot be updated.
     *
     * Generated from protobuf enum <code>PENDING_UPDATE_PROPOSAL_EXISTS = 15;</code>
     */
    const PENDING_UPDATE_PROPOSAL_EXISTS = 15;
    /**
     * Cannot propose more than one budget when the corresponding billing setup
     * hasn't been approved.
     *
     * Generated from protobuf enum <code>MULTIPLE_BUDGETS_NOT_ALLOWED_FOR_UNAPPROVED_BILLING_SETUP = 16;</code>
     */
    const MULTIPLE_BUDGETS_NOT_ALLOWED_FOR_UNAPPROVED_BILLING_SETUP = 16;
    /**
     * Cannot update the start time of a budget that has already started.
     *
     * Generated from protobuf enum <code>CANNOT_UPDATE_START_TIME_FOR_STARTED_BUDGET = 17;</code>
     */
    const CANNOT_UPDATE_START_TIME_FOR_STARTED_BUDGET = 17;
    /**
     * Cannot update the spending limit of a budget with an amount lower than
     * what has already been spent.
     *
     * Generated from protobuf enum <code>SPENDING_LIMIT_LOWER_THAN_ACCRUED_COST_NOT_ALLOWED = 18;</code>
     */
    const SPENDING_LIMIT_LOWER_THAN_ACCRUED_COST_NOT_ALLOWED = 18;
    /**
     * Cannot propose a budget update without actually changing any fields.
     *
     * Generated from protobuf enum <code>UPDATE_IS_NO_OP = 19;</code>
     */
    const UPDATE_IS_NO_OP = 19;
    /**
     * The end time must come after the start time.
     *
     * Generated from protobuf enum <code>END_TIME_MUST_FOLLOW_START_TIME = 20;</code>
     */
    const END_TIME_MUST_FOLLOW_START_TIME = 20;
    /**
     * The budget's date range must fall within the date range of its billing
     * setup.
     *
     * Generated from protobuf enum <code>BUDGET_DATE_RANGE_INCOMPATIBLE_WITH_BILLING_SETUP = 21;</code>
     */
    const BUDGET_DATE_RANGE_INCOMPATIBLE_WITH_BILLING_SETUP = 21;
    /**
     * The user is not authorized to mutate budgets for the given billing setup.
     *
     * Generated from protobuf enum <code>NOT_AUTHORIZED = 22;</code>
     */
    const NOT_AUTHORIZED = 22;
    /**
     * Mutates are not allowed for the given billing setup.
     *
     * Generated from protobuf enum <code>INVALID_BILLING_SETUP = 23;</code>
     */
    const INVALID_BILLING_SETUP = 23;
    /**
     * Budget creation failed as it overlaps with an pending budget proposal
     * or an approved budget.
     *
     * Generated from protobuf enum <code>OVERLAPS_EXISTING_BUDGET = 24;</code>
     */
    const OVERLAPS_EXISTING_BUDGET = 24;
    /**
     * The control setting in user's payments profile doesn't allow budget
     * creation through API. Log in to Google Ads to create budget.
     *
     * Generated from protobuf enum <code>CANNOT_CREATE_BUDGET_THROUGH_API = 25;</code>
     */
    const CANNOT_CREATE_BUDGET_THROUGH_API = 25;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::FIELD_MASK_NOT_ALLOWED => 'FIELD_MASK_NOT_ALLOWED',
        self::IMMUTABLE_FIELD => 'IMMUTABLE_FIELD',
        self::REQUIRED_FIELD_MISSING => 'REQUIRED_FIELD_MISSING',
        self::CANNOT_CANCEL_APPROVED_PROPOSAL => 'CANNOT_CANCEL_APPROVED_PROPOSAL',
        self::CANNOT_REMOVE_UNAPPROVED_BUDGET => 'CANNOT_REMOVE_UNAPPROVED_BUDGET',
        self::CANNOT_REMOVE_RUNNING_BUDGET => 'CANNOT_REMOVE_RUNNING_BUDGET',
        self::CANNOT_END_UNAPPROVED_BUDGET => 'CANNOT_END_UNAPPROVED_BUDGET',
        self::CANNOT_END_INACTIVE_BUDGET => 'CANNOT_END_INACTIVE_BUDGET',
        self::BUDGET_NAME_REQUIRED => 'BUDGET_NAME_REQUIRED',
        self::CANNOT_UPDATE_OLD_BUDGET => 'CANNOT_UPDATE_OLD_BUDGET',
        self::CANNOT_END_IN_PAST => 'CANNOT_END_IN_PAST',
        self::CANNOT_EXTEND_END_TIME => 'CANNOT_EXTEND_END_TIME',
        self::PURCHASE_ORDER_NUMBER_REQUIRED => 'PURCHASE_ORDER_NUMBER_REQUIRED',
        self::PENDING_UPDATE_PROPOSAL_EXISTS => 'PENDING_UPDATE_PROPOSAL_EXISTS',
        self::MULTIPLE_BUDGETS_NOT_ALLOWED_FOR_UNAPPROVED_BILLING_SETUP => 'MULTIPLE_BUDGETS_NOT_ALLOWED_FOR_UNAPPROVED_BILLING_SETUP',
        self::CANNOT_UPDATE_START_TIME_FOR_STARTED_BUDGET => 'CANNOT_UPDATE_START_TIME_FOR_STARTED_BUDGET',
        self::SPENDING_LIMIT_LOWER_THAN_ACCRUED_COST_NOT_ALLOWED => 'SPENDING_LIMIT_LOWER_THAN_ACCRUED_COST_NOT_ALLOWED',
        self::UPDATE_IS_NO_OP => 'UPDATE_IS_NO_OP',
        self::END_TIME_MUST_FOLLOW_START_TIME => 'END_TIME_MUST_FOLLOW_START_TIME',
        self::BUDGET_DATE_RANGE_INCOMPATIBLE_WITH_BILLING_SETUP => 'BUDGET_DATE_RANGE_INCOMPATIBLE_WITH_BILLING_SETUP',
        self::NOT_AUTHORIZED => 'NOT_AUTHORIZED',
        self::INVALID_BILLING_SETUP => 'INVALID_BILLING_SETUP',
        self::OVERLAPS_EXISTING_BUDGET => 'OVERLAPS_EXISTING_BUDGET',
        self::CANNOT_CREATE_BUDGET_THROUGH_API => 'CANNOT_CREATE_BUDGET_THROUGH_API',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountBudgetProposalError::class, \Google\Ads\GoogleAds\V11\Errors\AccountBudgetProposalErrorEnum_AccountBudgetProposalError::class);

