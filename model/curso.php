<?php
class Curso
{
	private $pdo;
    
    public $id;
    public $Nombre;
    

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

			$stm = $this->pdo->prepare("SELECT * FROM tcurso");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tcurso WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM tcurso WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tcurso SET 
						Nombre          = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Nombre
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Curso $data)
	{
		try 
		{
		$sql = "INSERT INTO tcurso(Nombre) 
		        VALUES (?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Nombre,
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}