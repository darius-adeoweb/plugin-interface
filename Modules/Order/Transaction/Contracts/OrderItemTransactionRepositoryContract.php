<?php
namespace Plenty\Modules\Order\Transaction\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Plenty\Modules\Order\Transaction\Models\OrderItemTransaction;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;
use Plenty\Repositories\Criteria\Criteria;
use Plenty\Repositories\Models\PaginatedResult;

/**
 * List and create order item transactions.
 */
interface OrderItemTransactionRepositoryContract 
{

	/**
	 * List transactions
	 */
	public function list(
		int $orderItemId, 
		array $columns = [], 
		array $with = []
	):Collection;

	/**
	 * Create a transaction
	 */
	public function create(
		array $data
	):OrderItemTransaction;

	/**
	 * Search transactions
	 */
	public function search(
		int $page = 1, 
		int $itemsPerPage = 50, 
		array $columns = [], 
		array $with = []
	):PaginatedResult;

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