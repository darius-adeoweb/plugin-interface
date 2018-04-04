<?php
namespace Plenty\Modules\Warehouse\Contracts;

use Plenty\Modules\Warehouse\Models\WarehouseLocation;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;
use\Contracts;

/**
 * Get, create, update and delete warehouse locations
 */
interface WarehouseLocationRepositoryContract 
{

	/**
	 * Get a warehouse location
	 */
	public function getWarehouseLocation(
		int $warehouseLocation
	):WarehouseLocation;

	/**
	 * Get all warehouse locations
	 */
	public function listWarehouseLocations(
		int $page = 1, 
		int $itemsPerPage = 50, 
		int $paginate = 1, 
		array $filters = [], 
		int $warehouseId = null
	):PaginatedResult;

	/**
	 * Create a warehouse location
	 */
	public function createWarehouseLocation(
		array $data
	):WarehouseLocation;

	/**
	 * Update a warehouse location
	 */
	public function updateWarehouseLocation(
		int $warehouseLocation, 
		array $data
	):WarehouseLocation;

	/**
	 * Delete a warehouse location
	 */
	public function deleteWarehouseLocation(
		int $warehouseLocation
	);

	/**
	 * Delete multiple warehouse locations
	 */
	public function deleteMultipleWarehouseLocations(
		array $warehouseLocationIds
	);

	/**
	 * Edit the purpose and status for a group of storage locations
	 */
	public function executeGroupFunction(
		array $data
	):array;

	/**
	 * Generate warehouse location labels
	 */
	public function generateWarehouseLocationLabel(
		int $warehouseId, 
		array $warehouseLocationIds
	):array;

	/**
	 * Resets all Criteria filters by creating a new instance of the builder object.
	 */
	public function clearCriteria(
	);

	/**
	 * Applies criteria classes to the current repository.
	 */
	public function applyCriteriaFromFilters(
	);

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
	 * Returns a collection of parsed filters as Condition object
	 */
	public function getConditions(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}