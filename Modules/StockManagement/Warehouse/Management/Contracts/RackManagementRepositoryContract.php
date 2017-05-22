<?php
namespace Plenty\Modules\StockManagement\Warehouse\Management\Contracts;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Plenty\Exceptions\ValidationException;
use Plenty\Modules\StockManagement\Warehouse\Management\Models\Rack;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Models\PaginatedResult;
use\Management\Contracts;

/**
 * The RackManagementRepositoryContract is the interface for the rack management repository. This interface provides the functionality to manage the warehouse configuration for racks. Racks can be retrieved, created or updated here.
 */
interface RackManagementRepositoryContract 
{

	/**
	 * Find a rack by id.
	 */
	public function getRackById(
		int $rackId, 
		array $columns = [], 
		array $with = []
	):Rack;

	/**
	 * Find racks. The results can be filtered by warehouse id.
	 */
	public function findRacks(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $columns = [], 
		array $with = []
	):array;

	/**
	 * Create a new rack.
	 */
	public function createRack(
		array $data, 
		int $warehouseId
	):Rack;

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}