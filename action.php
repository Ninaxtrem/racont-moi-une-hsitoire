<?php

include "traitement.php";

  $db = new Database();



  // Gérer la requête Ajax de récupération de tous les utilisateurs
  if (isset($_GET['read'])) {
    $utilisateur = $db->read();
    $output = '';
    if ($utilisateur) {
      foreach ($utilisateur as $row)  {
        $output .= '<tr>

                      <td>' . $row['nom'] . '</td>
                      <td>' . $row['prenoms'] . '</td>
                      <td>' . $row['pseudo'] . '</td>
                      <td>' . $row['mail'] . '</td>
                      <td>
                      <a href="#" id="' . $row['id'] . '" class="btn btn-success btn-sm rounded-pill py-0 editLink" data-toggle="modal" data-target="#editUserModal">Modifier</a>
                      <a href="#" id="' . $row['id'] . '" class="btn btn-danger btn-sm rounded-pill py-0 deleteLink" data-toggle="modal" data-target="#deleteUserModal">Supprimer</a>
                    </td>
                
                    </tr>';
      }
      echo $output;
    } else {
      echo '<tr>
              <td colspan="6">No utilisateur Found in the Database!</td>
            </tr>';
    }
  }
    // Gérer la demande de mise à jour de l'utilisateur Ajax
    if (isset($_POST['update'])) {
      $id = $util->testInput($_POST['id']);
      $nom = $util->testInput($_POST['nom']);
      $prenoms = $util->testInput($_POST['prenoms']);
      $pseudo = $util->testInput($_POST['pseudo']);
      $mail = $util->testInput($_POST['mail']);
  
     
  
  
      if ($db->update($id, $nom, $prenoms, $pseudo, $mail )) {
        echo $util->showMessage('success', 'utilisateur updated successfully!');
      } else {
        echo $util->showMessage('danger', 'Something went wrong!');
      }
    }
  
    // Gérer la demande de suppression d'utilisateur Ajax
    if (isset($_GET['delete'])) {
      $id = $_GET['id'];
      if ($db->delete($id)) {
        echo $util->showMessage('info', 'utilisateur deleted successfully!');
      } else {
        echo $util->showMessage('danger', 'Something went wrong!');
      }
    }
  
 

?>