
<section id="posts">
    <div class="container">
    <!-- <input  type="hidden"  name="iduser"  id="iduser"  value='<?php echo urldecode($_id) ; ?>'> -->
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>โรงพยาบาล</h4>
            </div>
            <nav class="ml-4">
              <ul class="pagination">
            <li class="page-item">
                  <a href="<?=base_url("admin/Hospital/insert") ?>" class="page-link">เพิ่มข้อมูลโรงพยาบาล</a>
                </li>
                </ul>
            </nav>
            <table class="table table-striped" id="myTable">
              <thead class="thead-dark">
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อโรงพยาบาล</th>
                  <th>ละติจูด</th>
                  <th>ลองจิจูด</th>
                  <th>จังหวัด</th>
                  <th>เบอร์โทรศัพท์</th>
                 <th></th>
                 <th></th>
                </tr>
              </thead>
              <tbody id="Hospital">
              </tbody>
            </table>

            <!-- PAGINATION -->
            <nav class="ml-4">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a href="#" class="page-link">Previous</a>
                </li>
                <li class="page-item active">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
