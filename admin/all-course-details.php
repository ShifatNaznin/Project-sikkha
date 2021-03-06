<?php
    require_once('functions/function.php');
    needLogged();
    get_header();
    get_sidebar();
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    All User Registration Information
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="add-course-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add Course Details</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <table class="table table-responsive table-striped table-hover table_cus">
              		<thead class="table_head">
                		<tr>
                        	  <th>Name</th>
                        	  <th>Title</th>
                            <th>Subtitle</th>
                            <th>Banner</th>
                            <th>Photo</th>
                            <th>Manage</th>
                        </tr>
                	</thead>
                    <tbody>
                        <?php
                            $sel="SELECT * FROM course_details  ORDER BY course_det_id DESC";
                            $Q=mysqli_query($con,$sel);
                            while($data=mysqli_fetch_assoc($Q)){
                        ?>
                    	<tr>
                        	<td><?= $data['course_det_name']; ?></td>
                        	<td><?= $data['course_det_title']; ?></td>
                            <td><?= $data['course_det_subtitle'] ?></td>

                            <td class="hidden-xs">
                                <?php
                                    if(!empty($data['course_det_background'])){
                                ?>
                                <img height="50" width="50" src="uploads/<?=$data['course_det_background'];?>" alt="photo"/>
                                <?php
                                  }else{
                                ?>
                                <img height="50" src="images/avatar.png" alt="photo"/>
                                <?php } ?>
                            </td>
                            <td class="hidden-xs">
                                <?php
                                    if(!empty($data['course_det_photo'])){
                                ?>
                                <img height="50" width="50" src="uploads/<?=$data['course_det_photo'];?>" alt="photo"/>
                                <?php
                                  }else{
                                ?>
                                <img height="50" src="images/avatar.png" alt="photo"/>
                                <?php } ?>
                            </td>

                            <td>
                            	  <a href="view-user.php?v=<?= $data['user_id']; ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                                <a href="edit-user.php?e=<?= $data['user_id']; ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                <a href="delete-user.php?d=<?= $data['user_id']; ?>"><i class="fa fa-trash fa-lg"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
              </table>
          </div>
          <div class="panel-footer">
            <div class="col-md-4">
            	<a href="#" class="btn btn-sm btn-warning">EXCEL</a>
                <a href="#" class="btn btn-sm btn-primary">PDF</a>
                <a href="#" class="btn btn-sm btn-danger">SVG</a>
                <a href="#" class="btn btn-sm btn-success">PRINT</a>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-right">
            	<nav aria-label="Page navigation">
                  <ul class="pagination pagina_cus">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
