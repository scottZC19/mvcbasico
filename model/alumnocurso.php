<?php
class AlumnoCurso
{
	private $pdo;
    
    public $Curso_id;
    public $Alumno_id;
    

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

			$stm = $this->pdo->prepare("SELECT * FROM talumnocurso");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($Curso_id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM talumnocurso WHERE Curso_id = ?");
			          

			$stm->execute(array($Curso_id));
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
			            ->prepare("DELETE FROM talumnocurso WHERE Curso_id = ?");			          

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
			$sql = "UPDATE talumnocurso SET 
						Codigo_id          = ?,
						Alumno_id          = ?
				    WHERE Codigo_id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Codigo_id, 
                        $data->Alumno_id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(AlumnoCurso $data)
	{
		try 
		{
		$sql = "INSERT INTO talumnocurso(Curso_id,Alumno_id) 
		        VALUES (?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Codigo_id,
					$data->Alumno_id,
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}