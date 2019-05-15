<?php


namespace App\Library\Agreement;


use App\Models\Hotel;
use DateTime;

class Mapper
{

    /**
     * Maps the hotel data to the agreement data
     *
     * @param \App\Models\Hotel                    $hotel The hotel record to map
     * @param \App\Library\Agreement\AgreementData $data  The agreement object
     *                                                    data to map
     *
     * @return \App\Library\Agreement\AgreementData
     */

    public function mapFromHotel(Hotel $hotel, AgreementData $data): AgreementData
    {
        $data->hotel_name = $hotel->name;
        $data->hotel_address = $hotel->address;
        $data->hotel_city = $hotel->city;
        //-- Where is the hotel state?
        $data->hotel_state = '';
        $data->hotel_zipcode = $hotel->zip;
        //-- Where is the hotel phone number?
        $data->hotel_phone = '';

        $data->iata_no = $hotel->IATA_number;

        return $data;
    }

    public function mapToAgreement()
    {

        $doc_values = [
            'signing'         => isset($_REQUEST['join_hoteldirectorid']) ? 'hotel' : 'club',
            'price_room'      => $guest['bid']['price-room'],
            'decision_date'   => $decision_date,
            'commission_rate' => $guest['bid']['commission-rate'],
            'checkin_time'    => $guest['bid']['check-in-time'] ?: $hotel['bid']['bid_content']['check-in-time'],
            'checkin_text'    => $guest['bid']['check-in-text'] ?: $hotel['bid']['bid_content']['check-in-text'],
            'checkout_time'   => $guest['bid']['check-out-time'] ?: $hotel['bid']['bid_content']['check-out-time'],
            'checkout_text'   => $guest['bid']['check-out-text'] ?: $hotel['bid']['bid_content']['check-out-text'],
            'current_date'    => $current_date,
            'arrival_date'    => $arrival_date,
            'arrival_day'     => $arrival_day,
            'arrival_date2'   => $arrival_date2,
            'departure_date'  => $departure_date,
            'name_of_group'   => $name_of_group,
            'contact'         => $contact,

            'hotel_name'    => $guest['hotel_name'] ?: $hotel['brand'],
            'hotel_address' => $guest['hotel_address'] ?: $hotel['hotel_address'],
            'hotel_city'    => $guest['hotel_city'] ?: $hotel['hotel_city'],
            'hotel_state'   => $guest['hotel_state'] ?: $hotel['hotel_state'],
            'hotel_zipcode' => $guest['hotel_zipcode'] ?: $hotel['hotel_zipcode'],
            'hotel_phone'   => $guest['hotel_city'] ?: $hotel['hotel_city'],


            'address'           => 'TBD',
            'address2'          => 'TBD',
            'hotel_honors'      => $guest['hotel_code'] ?: $hotel['hotel_code'],
            'city'              => 'TBD',
            'state'             => 'TBD',
            'zipcode'           => 'TBD',
            'phone'             => 'TBD',
            'email'             => 'TBD',
            'sales_person'      => $guest['sales_person'] ?: $hotel['contactname'],
            'sales_person_role' => $hotel_director['organization_role'],
            'sales_phone'       => $guest['contact_number'] ?: $hotel_director['directors_work_phone'],
            'sales_email'       => $guest['contact_email'] ?: $hotel_director['directors_email'],
            'sales_fax'         => '',
            'iata_no'           => $guest['hotel_code'],

            'queen_guest_rooms' => $trip['rooms']['queenbeds'],
            'queen_guest_rate'  => $guest['bid']['price-room'] ?: $hotel['bid']['bids_content']['price-room'],
            'king_guest_rooms'  => $trip['rooms']['kingbeds'],
            'king_guest_rate'   => $guest['bid']['price-room-king'] ?: $hotel['bid']['bids_content']['price-room-king'],

            'mode' => isset($_REQUEST['mode']) ? $_REQUEST['mode'] : 'view',

            'hotel_agreements_id'             => $agreement['hotel_agreements_id'],
            'hotel_agreements_address'        => $agreement['hotel_agreements_address'] ?: '',
            'hotel_agreements_address2'       => $agreement['hotel_agreements_address2'] ?: '',
            'hotel_agreements_city'           => $agreement['hotel_agreements_city'] ?: '',
            'hotel_agreements_state'          => $agreement['hotel_agreements_state'] ?: '',
            'hotel_agreements_zipcode'        => $agreement['hotel_agreements_zipcode'] ?: '',
            'hotel_agreements_signature'      => $agreement['hotel_agreements_signature'] ?: '',
            'hotel_agreements_signature_type' => $agreement['hotel_agreements_signature_type'] ?: 0,
            'hotel_agreements_signature_date' => $agreement['hotel_agreements_signature_date'] ?: '',
            'hotel_agreements_date'           => $agreement['hotel_agreements_date'] ?: '',
            'hotel_agreements_first_name'     => $agreement['hotel_agreements_first_name'] ?: '',
            'hotel_agreements_last_name'      => $agreement['hotel_agreements_last_name'] ?: '',
            'hotel_agreements_title'          => $agreement['hotel_agreements_title'] ?: '',
            'hotel_agreements_email'          => $agreement['hotel_agreements_email'] ?: '',
            'hotel_agreements_phone'          => $agreement['hotel_agreements_phone'] ?: '',
            'hotel_agreements_rewards_number' => $agreement['hotel_agreements_rewards_number'] ?: '',

            'url' => FULLURL,

            'hotel_agreements_hotel_first_name'     => $agreement['hotel_agreements_hotel_first_name'] ?: '',
            'hotel_agreements_hotel_last_name'      => $agreement['hotel_agreements_hotel_last_name'] ?: '',
            'hotel_agreements_hotel_title'          => $agreement['hotel_agreements_hotel_title'] ?: '',
            'hotel_agreements_hotel_signature'      => $agreement['hotel_agreements_hotel_signature'] ?: '',
            'hotel_agreements_hotel_signature_type' => $agreement['hotel_agreements_hotel_signature_type'] ?: 0,
            'hotel_agreements_hotel_signature_date' => $agreement['hotel_agreements_hotel_signature_date'] ?: '',

            'error_title'          => '',
            'error_message'        => '',
            'confirmed_reading'    => false,
            'signature'            => '',
            'signature_type'       => false,
            'hotel_signature'      => '',
            'hotel_signature_type' => false,
            'current_id'           => false,
            'processing'           => false,
            'progress'             => 0,
            'progressInterval'     => null,
        ];

        if ($doc_values['signing'] === 'club') {
            $doc_values['agreement_client_ids'] = [
                'id_address',
                'id_address2',
                'id_city',
                'id_state',
                'id_zipcode',
                'id_phone',
                'id_email',
                'id_authorized_by',
                'id_first_name',
                'id_last_name',
                'id_title',
                'id_signature_date',
            ];
        } else if ($doc_values['signing'] === 'hotel') {
            $doc_values['agreement_client_ids'] = [
                'id_hotel_authorized_by',
                'id_hotel_first_name',
                'id_hotel_last_name',
                'id_hotel_title',
                'id_hotel_signature_date',
            ];
        }

        if ($doc_values['hotel_agreements_signature_date']) {
            $signature_date                                = new DateTime($doc_values['hotel_agreements_signature_date']);
            $doc_values['hotel_agreements_signature_date'] = $signature_date->format('m/d/Y');
        }

        if ($doc_values['hotel_agreements_hotel_signature_date']) {
            $hotel_signature_date                                = new DateTime($doc_values['hotel_agreements_hotel_signature_date']);
            $doc_values['hotel_agreements_hotel_signature_date'] = $hotel_signature_date->format('m/d/Y');
        }

        return $doc_values;
    }
}