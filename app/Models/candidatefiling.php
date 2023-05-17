<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class candidatefiling extends Model
{
    protected $fillable =
        ['document_type_full', 'debts_owed_by_committee', 'report_year', 'candidate_id', 'primary_general_indicator', 'previous_file_number', 'cash_on_hand_beginning_period', 'coverage_end_date', 'debts_owed_to_committee', 'senate_personal_funds', 'net_donations', 'treasurer_name', 'total_independent_expenditures', 'party', 'amendment_version', 'amendment_chain', 'update_date', 'beginning_image_number', 'election_year', 'ending_image_number', 'most_recent', 'state', 'pdf_url', 'report_type_full', 'document_type', 'cash_on_hand_end_period', 'file_number', 'total_individual_contributions', 'total_receipts', 'cycle', 'request_type', 'committee_id', 'report_type', 'document_description', 'amendment_indicator', 'csv_url', 'cmte_tp', 'pages', 'fec_url', 'total_disbursements', 'sub_id', 'form_type', 'is_amended', 'total_communication_cost', 'candidate_name', 'most_recent_file_number', 'office', 'opposition_personal_funds', 'fec_file_id', 'house_personal_funds', 'means_filed', 'committee_name', 'receipt_date', 'coverage_start_date', 'html_url'];


    public static function getAllCandidateFiling($candidateID)
    {

        $apiKey = '13PTvvyIlc6z5v9l1e9iPEgFORKFAmqowkaSOXfh';
        $dataURL = "https://api.open.fec.gov/v1/candidate/$candidateID/filings/?page=1&sort=-receipt_date&per_page=20&api_key=$apiKey";
        $results = json_decode(file_get_contents($dataURL), true);

        $filingData = $results['results'];

            foreach ($filingData as $filingData) {
                $filing = new candidatefiling;

                $filing->document_type_full = $filingData['document_type_full'];
                $filing->debts_owed_by_committee = $filingData['debts_owed_by_committee'];
                $filing->report_year = $filingData['report_year'];
                $filing->candidate_id = $filingData['candidate_id'];
                $filing->primary_general_indicator = $filingData['primary_general_indicator'];
                $filing->previous_file_number = $filingData['previous_file_number'];
                $filing->cash_on_hand_beginning_period = $filingData['cash_on_hand_beginning_period'];
                $filing->coverage_end_date = $filingData['coverage_end_date'];
                $filing->debts_owed_to_committee = $filingData['debts_owed_to_committee'];
                $filing->senate_personal_funds = $filingData['senate_personal_funds'];
                $filing->net_donations = $filingData['net_donations'];
                $filing->treasurer_name = $filingData['treasurer_name'];
                $filing->total_independent_expenditures = $filingData['total_independent_expenditures'];
                $filing->party = $filingData['party'];
                $filing->amendment_version = $filingData['amendment_version'];
                $filing->update_date = $filingData['update_date'];
                $filing->beginning_image_number = $filingData['beginning_image_number'];
                $filing->election_year = $filingData['election_year'];
                $filing->ending_image_number = $filingData['ending_image_number'];
                $filing->most_recent = $filingData['most_recent'];
                $filing->state = $filingData['state'];
                $filing->pdf_url = $filingData['pdf_url'];
                $filing->report_type_full = $filingData['report_type_full'];
                $filing->document_type = $filingData['document_type'];
                $filing->cash_on_hand_end_period = $filingData['cash_on_hand_end_period'];
                $filing->file_number = $filingData['file_number'];
                $filing->total_individual_contributions = $filingData['total_individual_contributions'];
                $filing->total_receipts = $filingData['total_receipts'];
                $filing->cycle = $filingData['cycle'];
                $filing->request_type = $filingData['request_type'];
                $filing->committee_id = $filingData['committee_id'];
                $filing->report_type = $filingData['report_type'];
                $filing->document_description = $filingData['document_description'];
                $filing->amendment_indicator = $filingData['amendment_indicator'];
                $filing->csv_url = $filingData['csv_url'];
                $filing->cmte_tp = $filingData['cmte_tp'];
                $filing->pages = $filingData['pages'];
//                $filing->fec_url = $filingData['fec_url'];
                $filing->total_disbursements = $filingData['total_disbursements'];
                $filing->sub_id = $filingData['sub_id'];
                $filing->form_type = $filingData['form_type'];
                $filing->is_amended = $filingData['is_amended'];
                $filing->total_communication_cost = $filingData['total_communication_cost'];
                $filing->candidate_name = $filingData['candidate_name'];
                $filing->most_recent_file_number = $filingData['most_recent_file_number'];
                $filing->office = $filingData['office'];
                $filing->opposition_personal_funds = $filingData['opposition_personal_funds'];
                $filing->fec_file_id = $filingData['fec_file_id'];
                $filing->house_personal_funds = $filingData['house_personal_funds'];
                $filing->means_filed = $filingData['means_filed'];
                $filing->committee_name = $filingData['committee_name'];
                $filing->receipt_date = $filingData['receipt_date'];
                $filing->coverage_start_date = $filingData['coverage_start_date'];
                $filing->html_url = $filingData['html_url'];
                $filing->save();
            }
        }

}
