<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int                  id
 * @property int                  user_trip_id
 * @property int                  user_id
 * @property \Carbon\Carbon       added
 * @property int                  status
 * @property string               destination
 * @property string               hotel_information
 * @property string               distance_event
 * @property int                  offer_rate
 * @property bool                 cc_authorization
 * @property \Carbon\Carbon       offer_validity
 * @property string               check_in
 * @property string               check_out
 * @property string               sales_manager
 * @property string               king_beedrooms
 * @property string               queen_beedrooms
 * @property string               amenitie_ids
 * @property int                  ramount
 * @property string               receipt
 * @property string               hotels_message
 * @property int                  decline_reason
 * @property string               team
 * @property string               roster
 * @property \Carbon\Carbon       created_at
 * @property \Carbon\Carbon       updated_at
 * @property \App\Models\UserTrip trip
 */
class Rfp extends Model
{
    /**
     * Constants for RFP status to make it easy to read a status
     */
    const STATUS_PENDING = 1;
    const STATUS_VIEWED = 2;
    const STATUS_BID_SENT = 3;
    const STATUS_REVIEW = 4;
    const STATUS_BID_SELECTED = 5;
    const STATUS_AGREEMENT_CLIENT = 6;
    const STATUS_AGREEMENT_HOTEL = 7;
    const STATUS_ROOMING_LIST = 8;
    const STATUS_BILLING_RECEIPT = 9;

    /**
     * A text friendly version of the RFP statuses
     *
     * @var array
     */
    const STATUSES = [
        'Bids Pending'          => self::STATUS_PENDING,
        'Corporate Viewed'      => self::STATUS_VIEWED,
        'Bids Sent'             => self::STATUS_BID_SENT,
        'Bids Under Review'     => self::STATUS_REVIEW,
        'Bid Selected'          => self::STATUS_BID_SELECTED,
        'Client Agreement'      => self::STATUS_AGREEMENT_CLIENT,
        'Hotel Agreement'       => self::STATUS_AGREEMENT_HOTEL,
        'Hotel Billing Receipt' => self::STATUS_BILLING_RECEIPT,
    ];

    protected $fillable = ['status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hotel()
    {
        return $this->hasOneThrough(Hotel::class, User::class);
    }

    public function userInfo()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // One To Many Relation with Trips
    public function trip()
    {
        return $this->belongsTo(UserTrip::class, 'user_trip_id');
    }

    public function usertripInfo()
    {
        return $this->belongsTo(UserTrip::class, 'user_trip_id');
    }

    public function invoices()
    {
        return $this->hasMany(Invoices::class);
    }
}
