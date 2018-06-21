<?php include('core/init.php'); ?>

<?php
//Create database Object
$db = new Database();

//Run query
$db->query("SELECT  *  FROM  `contacts`");

//Assign Result Set 
$contacts = $db->resultset();
?>
<div class="row">
      <div class="large-12 columns">
        <table>
          <thead>
            <tr>
              <th width="250">First Name:</th>
              <th width="250">Last Name:</th>
              <th width="250">Phone Number:</th>
              <th width="200">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($contacts as $contact) : ?>
            <tr>
              <td><?php echo $contact->first_name ?></td>
              <td><?php echo $contact->last_name ?></td>
              <td><?php echo $contact->phone ?></td>
              <td>
                <ul class="button-group">
                  <li>
                    <a href="#" class="button tiny" data-reveal-id="editModal<?php echo $contact->id; ?>" data-contact-id="<?php echo $contact->id; ?>">Edit</a>
                    <div id="editModal<?php echo $contact->id; ?>" data-cid="<?php echo $contact->id; ?>" class="reveal-modal editModal" data-reveal>
                      <h2>Edit Contact</h2>
                      <form id="editContact" action="#" method="post">
                        <div class="row">
                          <div class="large-12 columns">
                            <label>First Name
                              <input name="first_name" type="text" placeholder="Enter First Name..." value="<?php echo $contact->first_name ?>"/>
                            </label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="large-12 columns">
                            <label>Last Name
                              <input name="last_name" type="text" placeholder="Enter Last Name..." value="<?php echo $contact->last_name ?>"/>
                              <input type="hidden" name="id" type="text" value="<?php echo $contact->id ?>"/>
                            </label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="large-12 columns">
                            <label>Phone Number
                              <input name="phone" type="text" placeholder="Enter Phone Number..." value="<?php echo $contact->phone ?>"/>
                            </label>
                          </div>
                        </div>
                        <input type="submit" name="submit" value="Submit" class="add-btn button right small">
                        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                      </form>
                    </div>
                  </li>
                  <li>
                    <form id="deleteContact" action="#" method="post">
                      <input type="submit" class="delete-btn button tiny secondary alert" value="Delete" />
                      <input type="hidden" name="id" type="text" value="<?php echo $contact->id ?>"/>
                    </form>
                  </li>
                </ul>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>