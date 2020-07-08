<?php
class region
{
	private $pdo;
    
    public $ID;
    public $COD_REG;
    public $DESC_REG; 

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM region");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($ID)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM region WHERE ID = ?");
			          
			$stm->execute(array($ID));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($ID)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM region WHERE ID = ?");			          

			$stm->execute(array($ID));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE region SET 
						COD_REG      		= ?,
						DESC_REG          = ?
						
				    WHERE ID = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->ID, 
                        $data->COD_REG,                        
                        $data->DESC_REG
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(region $data)
	{
		try 
		{
		$sql = "INSERT INTO region (COD_REG,DESC_REG) 
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->COD_REG, 
                    $data->DESC_REG, 
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}