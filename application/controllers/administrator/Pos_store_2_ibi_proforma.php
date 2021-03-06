<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Proforma Controller
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Proforma site
*|
*/
class Pos_store_2_ibi_proforma extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_pos_store_2_ibi_proforma');
	}

	/**
	* show all Pos Store 2 Ibi Proformas
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('pos_store_2_ibi_proforma_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['pos_store_2_ibi_proformas'] = $this->model_pos_store_2_ibi_proforma->get($filter, $field, $this->limit_page, $offset);
		$this->data['pos_store_2_ibi_proforma_counts'] = $this->model_pos_store_2_ibi_proforma->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/pos_store_2_ibi_proforma/index/',
			'total_rows'   => $this->model_pos_store_2_ibi_proforma->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Pos Store 2 Ibi Proforma List');
		$this->render('backend/standart/administrator/pos_store_2_ibi_proforma/pos_store_2_ibi_proforma_list', $this->data);
	}
	
	/**
	* Add new pos_store_2_ibi_proformas
	*
	*/
	public function add()
	{
		$this->is_allowed('pos_store_2_ibi_proforma_add');

		$this->template->title('Pos Store 2 Ibi Proforma New');
		$this->render('backend/standart/administrator/pos_store_2_ibi_proforma/pos_store_2_ibi_proforma_add', $this->data);
	}

	/**
	* Add New Pos Store 2 Ibi Proformas
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('pos_store_2_ibi_proforma_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'TITRE_PROFORMA' => $this->input->post('TITRE_PROFORMA'),
				'CODE_PROFORMA' => $this->input->post('CODE_PROFORMA'),
				'REF_CLIENT_PROFORMA' => $this->input->post('REF_CLIENT_PROFORMA'),
				'TYPE_PROFORMA' => $this->input->post('TYPE_PROFORMA'),
				'DATE_CREATION_PROFORMA' => $this->input->post('DATE_CREATION_PROFORMA'),
				'DATE_MOD_PROFORMA' => $this->input->post('DATE_MOD_PROFORMA'),
				'PAYMENT_TYPE_PROFORMA' => $this->input->post('PAYMENT_TYPE_PROFORMA'),
				'AUTHOR_PROFORMA' => $this->input->post('AUTHOR_PROFORMA'),
				'SOMME_PERCU_PROFORMA' => $this->input->post('SOMME_PERCU_PROFORMA'),
				'TOTAL_PROFORMA' => $this->input->post('TOTAL_PROFORMA'),
				'DISCOUNT_TYPE_PROFORMA' => $this->input->post('DISCOUNT_TYPE_PROFORMA'),
				'TVA_PROFORMA' => $this->input->post('TVA_PROFORMA'),
				'GROUP_DISCOUNT_PROFORMA' => $this->input->post('GROUP_DISCOUNT_PROFORMA'),
				'REF_SHIPPING_ADDRESS_PROFORMA' => $this->input->post('REF_SHIPPING_ADDRESS_PROFORMA'),
				'SHIPPING_AMOUNT_PROFORMA' => $this->input->post('SHIPPING_AMOUNT_PROFORMA'),
				'TYPE_DELAY_PROFORMA' => $this->input->post('TYPE_DELAY_PROFORMA'),
				'TEMPS_DELAY_PROFORMA' => $this->input->post('TEMPS_DELAY_PROFORMA'),
				'COND_PAID_PROFORMA' => $this->input->post('COND_PAID_PROFORMA'),
				'PERCENT_PAID_PROFORMA' => $this->input->post('PERCENT_PAID_PROFORMA'),
				'PERCENT_PAID_LIVR_PROFORMA' => $this->input->post('PERCENT_PAID_LIVR_PROFORMA'),
				'VALID_OFFRE_PROFORMA' => $this->input->post('VALID_OFFRE_PROFORMA'),
			];

			
			$save_pos_store_2_ibi_proforma = $this->model_pos_store_2_ibi_proforma->store($save_data);

			if ($save_pos_store_2_ibi_proforma) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_pos_store_2_ibi_proforma;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/pos_store_2_ibi_proforma/edit/' . $save_pos_store_2_ibi_proforma, 'Edit Pos Store 2 Ibi Proforma'),
						anchor('administrator/pos_store_2_ibi_proforma', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/pos_store_2_ibi_proforma/edit/' . $save_pos_store_2_ibi_proforma, 'Edit Pos Store 2 Ibi Proforma')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_proforma');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_proforma');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
		/**
	* Update view Pos Store 2 Ibi Proformas
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('pos_store_2_ibi_proforma_update');

		$this->data['pos_store_2_ibi_proforma'] = $this->model_pos_store_2_ibi_proforma->find($id);

		$this->template->title('Pos Store 2 Ibi Proforma Update');
		$this->render('backend/standart/administrator/pos_store_2_ibi_proforma/pos_store_2_ibi_proforma_update', $this->data);
	}

	/**
	* Update Pos Store 2 Ibi Proformas
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('pos_store_2_ibi_proforma_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'TITRE_PROFORMA' => $this->input->post('TITRE_PROFORMA'),
				'CODE_PROFORMA' => $this->input->post('CODE_PROFORMA'),
				'REF_CLIENT_PROFORMA' => $this->input->post('REF_CLIENT_PROFORMA'),
				'TYPE_PROFORMA' => $this->input->post('TYPE_PROFORMA'),
				'DATE_CREATION_PROFORMA' => $this->input->post('DATE_CREATION_PROFORMA'),
				'DATE_MOD_PROFORMA' => $this->input->post('DATE_MOD_PROFORMA'),
				'PAYMENT_TYPE_PROFORMA' => $this->input->post('PAYMENT_TYPE_PROFORMA'),
				'AUTHOR_PROFORMA' => $this->input->post('AUTHOR_PROFORMA'),
				'SOMME_PERCU_PROFORMA' => $this->input->post('SOMME_PERCU_PROFORMA'),
				'TOTAL_PROFORMA' => $this->input->post('TOTAL_PROFORMA'),
				'DISCOUNT_TYPE_PROFORMA' => $this->input->post('DISCOUNT_TYPE_PROFORMA'),
				'TVA_PROFORMA' => $this->input->post('TVA_PROFORMA'),
				'GROUP_DISCOUNT_PROFORMA' => $this->input->post('GROUP_DISCOUNT_PROFORMA'),
				'REF_SHIPPING_ADDRESS_PROFORMA' => $this->input->post('REF_SHIPPING_ADDRESS_PROFORMA'),
				'SHIPPING_AMOUNT_PROFORMA' => $this->input->post('SHIPPING_AMOUNT_PROFORMA'),
				'TYPE_DELAY_PROFORMA' => $this->input->post('TYPE_DELAY_PROFORMA'),
				'TEMPS_DELAY_PROFORMA' => $this->input->post('TEMPS_DELAY_PROFORMA'),
				'COND_PAID_PROFORMA' => $this->input->post('COND_PAID_PROFORMA'),
				'PERCENT_PAID_PROFORMA' => $this->input->post('PERCENT_PAID_PROFORMA'),
				'PERCENT_PAID_LIVR_PROFORMA' => $this->input->post('PERCENT_PAID_LIVR_PROFORMA'),
				'VALID_OFFRE_PROFORMA' => $this->input->post('VALID_OFFRE_PROFORMA'),
			];

			
			$save_pos_store_2_ibi_proforma = $this->model_pos_store_2_ibi_proforma->change($id, $save_data);

			if ($save_pos_store_2_ibi_proforma) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/pos_store_2_ibi_proforma', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_proforma');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_proforma');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Proformas
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('pos_store_2_ibi_proforma_delete');

		$this->load->helper('file');

		$arr_id = $this->input->get('id');
		$remove = false;

		if (!empty($id)) {
			$remove = $this->_remove($id);
		} elseif (count($arr_id) >0) {
			foreach ($arr_id as $id) {
				$remove = $this->_remove($id);
			}
		}

		if ($remove) {
            set_message(cclang('has_been_deleted', 'pos_store_2_ibi_proforma'), 'success');
        } else {
            set_message(cclang('error_delete', 'pos_store_2_ibi_proforma'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Pos Store 2 Ibi Proformas
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('pos_store_2_ibi_proforma_view');

		$this->data['pos_store_2_ibi_proforma'] = $this->model_pos_store_2_ibi_proforma->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Pos Store 2 Ibi Proforma Detail');
		$this->render('backend/standart/administrator/pos_store_2_ibi_proforma/pos_store_2_ibi_proforma_view', $this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Proformas
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$pos_store_2_ibi_proforma = $this->model_pos_store_2_ibi_proforma->find($id);

		
		
		return $this->model_pos_store_2_ibi_proforma->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('pos_store_2_ibi_proforma_export');

		$this->model_pos_store_2_ibi_proforma->export('pos_store_2_ibi_proforma', 'pos_store_2_ibi_proforma');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('pos_store_2_ibi_proforma_export');

		$this->model_pos_store_2_ibi_proforma->pdf('pos_store_2_ibi_proforma', 'pos_store_2_ibi_proforma');
	}
}


/* End of file pos_store_2_ibi_proforma.php */
/* Location: ./application/controllers/administrator/Pos Store 2 Ibi Proforma.php */