<?php

/**
 * This function generates the result set of
 * the products table.
 *
 * @return array $products - an assoc. array which contains all the products stored in the DB.
 */
function getAllProducts()
{
    global $dbc;

		$query = 'SELECT prod_id, prod_name, prod_desc, stock_amount, unit_price, photo FROM product';
		$statement = $dbc->prepare($query);
		$statement->execute();
		$products = $statement->fetchAll();
		$statement->closeCursor();
		return $products;
}

/** 
 * This function takes in a first and last name
 * and stores it in the database
 *
 * @param string $firstName - the firstName the user entered in the form.
 * @param string $lastName - the lastName the user enterd in the form.
 *
 * @return void 
 */
function storeName($firstName, $lastName)
{
    global $dbc;
    
    $query = 'INSERT INTO tblNames (first_name, last_name) 
        VALUES (:firstName, :lastName)';
    $statement = $dbc->prepare($query);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->execute();
    $statement->closeCursor();

}

/**
 * This function generates the result set of
 * the tblNames table.
 *
 * @return array $names - an assoc. array which contains all the names stored in the DB.
 */
function getAllNames()
{
    global $dbc;
    
    $query = 'SELECT * from tblNames ORDER BY last_name';
    $statement = $dbc->prepare($query);
    $statement->execute();
    $names = $statement->fetchAll();
    $statement->closeCursor();
    return $names;

}

?>
