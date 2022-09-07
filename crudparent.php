<?php

require '../class/Autoloader.php';


  $db = new Database();
  

  // Gérer la demande d'ajout d'un nouvel utilisateur Ajax
  if (isset($_POST['add'])) {
    $nom = $util->testInput($_POST['nom']);
    $prenom = $util->testInput($_POST['prenom']);
    $phone = $util->testInput($_POST['phone']);
    $mail = $util->testInput($_POST['mail']);
    $password = $util->testInput($_POST['mdp']);
    $role = $util->testInput($_POST['role']);
    

    if ($db->insert($nom, $prenom, $phone, $mail, $password, $role)) {
      echo $util->showMessage('success', 'User inserted successfully!');
    } else {
      echo $util->showMessage('danger', 'Something went wrong!');
    }
  }

  // Gérer la requête Ajax de récupération de tous les utilisateurs
  if (isset($_GET['read'])) {
    $users = $db->read();
    $output = '';
    if ($users) {
      foreach ($users as $row) {
        $output .= '<tr>
                      <td>' . $row['nom_postulant'] . '</td>
                      <td>' . $row['prenom_postulant'] . '</td>
                      <td>' . $row['telephone_postulant'] . '</td>
                      <td>' . $row['mail_postulant'] . '</td>
                      <td>' . $row['mdp_postulant'] . '</td>
                      <td>' . $row['role_utilisateur'] . '</td>
                      <td>
                        <a href="#" id="' . $row['id_postulant'] . '" class="btn btn-success btn-sm rounded-pill py-0 editLink" data-toggle="modal" data-target="#editUserModal">Edit</a>

                        <a href="#" id="' . $row['id_postulant'] . '" class="btn btn-danger btn-sm rounded-pill py-0 deleteLink">Delete</a>
                      </td>
                    </tr>';
      }
      echo $output;
    } else {
      echo '<tr>
              <td colspan="6">No Users Found in the Database!</td>
            </tr>';
    }
  }
 

  // Gérer la demande d'édition d'utilisateur Ajax
  if (isset($_GET['edit'])) {
    $id = $_GET['id'];

    $user = $db->readOne($id);
    echo json_encode($users);
  }

  // Gérer la demande de mise à jour de l'utilisateur Ajax
  if (isset($_POST['update'])) {
    $id = $util->testInput($_POST['id']);
    $nom = $util->testInput($_POST['nom']);
    $prenom = $util->testInput($_POST['prenom']);
    $phone = $util->testInput($_POST['phone']);
    $mail = $util->testInput($_POST['mail']);
    $password = $util->testInput($_POST['mdp']);
   


    if ($db->update($id, $nom, $prenom, $phone, $mail, $password, $role)) {
      echo $util->showMessage('success', 'User updated successfully!');
    } else {
      echo $util->showMessage('danger', 'Something went wrong!');
    }
  }

  // Gérer la demande de suppression d'utilisateur Ajax
  if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    if ($db->delete($id)) {
      echo $util->showMessage('info', 'User deleted successfully!');
    } else {
      echo $util->showMessage('danger', 'Something went wrong!');
    }
  }

?>