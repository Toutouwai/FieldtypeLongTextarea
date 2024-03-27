<?php namespace ProcessWire;

class FieldtypeLongTextarea extends FieldtypeTextarea {

	/**
	 * Get database schema used by the Field
	 *
	 * @param Field $field
	 * @return array
	 */
	public function getDatabaseSchema(Field $field) {
		$schema = parent::getDatabaseSchema($field);
		$schema['data'] = 'longtext NOT NULL';
		$schema['keys']['data'] = 'FULLTEXT KEY data (data)';
		return $schema;
	}

}
