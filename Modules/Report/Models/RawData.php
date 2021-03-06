<?php
namespace Plenty\Modules\Report\Models;


/**
 * The report raw model
 */
abstract class RawData 
{

	const CREATED_AT = 'createdAt';

	const UPDATED_AT = 'updatedAt';
	public		$id;
	public		$createdAtTimestamp;
	public		$plentyIdHash;
	public		$dataName;
	public		$dataNameProcessStatus;
	public		$processStatusPlentyIdHash;
	public		$path;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}