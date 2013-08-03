<?php
class SpiderModel extends CommonModel 
{
	public function __construct($data = '')
	{
		$this->table = 'site';


		parent::__construct($data);		
	}

	/**
	 * Add the list url info
	 * 
	 * @param array $data
	 * @return boolean
	 */
	public function addListUrl($data)
	{
		if (!is_array($data) || empty($data)) {
			return false;
		}

		$this->addInfo($data, 'list');
	}

	/**
	 * Add the content info
	 * 
	 * @param array $data
	 * @return boolean
	 */
	public function addContent($data)
	{
		if (!is_array($data) || empty($data)) {
			return false;
		}

		$this->addInfo($data, 'content', true);
	}

	/**
	 * Get the valid list urls
	 * 
	 * @param int $jobId
	 * @return array | null
	 */
	public function getValidListUrls($jobId)
	{
		$where = array("job_id = " => $jobId, "status = " => 0);
		$fields = 'id, base_file';

		$result = $this->getInfos('list', $where, array(), 1, 100, $fields);
		$infos = $result['infos'];

		return $infos;
	}

	/**
	 * Get the valid list urls
	 * 
	 * @param int $jobId
	 * @return array | null
	 */
	public function getListContents($where, $limit = 100, $fields = 'id, content_key, pageurl')
	{
		//$fields = 'id, content_key, pageurl';

		$result = $this->getInfos('content', $where, array(), 1, $limit, $fields, 'id');
		$infos = $result['infos'];

		return $infos;
	}	
}