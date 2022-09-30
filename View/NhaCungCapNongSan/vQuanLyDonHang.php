<div class="col-md-9">
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách thông tin đơn hàng</h3> 

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Mã đơn hàng</th>
                      <th>Tên đơn hàng</th>
                      <th>Trạng thái</th>
                      <th>Mã nhà cung cấp</th>
                      <th>Mã khách hàng</th>
                      <th>Mã doanh nghiệp</th>
                      <th>Tác vụ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#158</td>
                      <td>Đơn đặt hàng Thanh long</td>
                      <td>Đã tiếp nhận</td>
                      <td><span class="tag tag-success">#002</span></td>
                      <td><span class="tag tag-success">#003</span></td>
                      <td><span class="tag tag-success">#004</span></td>
                      <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Xem chi tiết</button></td>
                    </tr>
                    <tr>

                        <td>#158</td>
                        <td>Đơn đặt hàng Thanh long</td>
                        <td>Đang đóng gói</td>
                        <td><span class="tag tag-success">#002</span></td>
                        <td><span class="tag tag-success">#003</span></td>
                        <td><span class="tag tag-success">#004</span></td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Xem chi tiết</button></td>

                      </tr>
                      <tr>
                        <td>#158</td>
                        <td>Đơn đặt hàng Thanh long</td>
                        <td>Đang đóng gói</td>
                        <td><span class="tag tag-success">#002</span></td>
                        <td><span class="tag tag-success">#003</span></td>
                        <td><span class="tag tag-success">#004</span></td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Xem chi tiết</button></td>
                      </tr>
                      <tr>
                        <td>#158</td>
                        <td>Đơn đặt hàng Thanh long</td>
                        <td>Đang đóng gói</td>
                        <td><span class="tag tag-success">#002</span></td>
                        <td><span class="tag tag-success">#003</span></td>
                        <td><span class="tag tag-success">#004</span></td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Xem chi tiết</button></td>
  
                      </tr>
                  </tbody>
                </table>
              </div>


                       <!-- Modal -->
                       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Thông tin đơn hàng</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputName">Tên khách hàng</label>
                                    <input type="text" class="form-control" id="inputName" disabled value="Nguyễn Văn Tám" >
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputPhone">Số điện thoại khách hàng</label>
                                    <input type="text" class="form-control" id="inputPhone" disabled value="0213465464" >
                                  </div>

                                  <div class="form-group col-md-6">
                                    <label for="inputAddress">Địa chỉ</label>
                                    <input type="text" class="form-control" id="inputAddress" disabled value="12 Nguyễn Văn Bảo" >
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputDateCreate">Ngày tạo đơn hàng</label>
                                  <input type="text" class="form-control" id="inputDateCreate" disabled value="#18/09/2022" >
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Trạng thái</label>
                                  <input type="text" class="form-control" id="inputStatus" disabled value="Đang xử lý" >
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Xác nhận</button>
                            </div>
                          </div>
                        </div>
                      </div>
    
                  <!-- Modal -->
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
   </div>