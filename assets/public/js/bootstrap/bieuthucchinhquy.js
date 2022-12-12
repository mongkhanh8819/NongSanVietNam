$(document).ready(function(e){
    var i = 1;
    //hàm kiểm tra tên
    function kiemtraTen(){
        let re = /^[A-Z][a-z]+(\s[A-Z][a-z]+)+$/;
        if($("#hoten").val() == ''){
            $("#tbHoten").html("Không bỏ trống");
            return false;
        }
        else if(!re.test($("#hoten").val())){
            $("#tbHoten").html("Kí tự đầu in hoa");
            return false;
        }
        $("#tbHoten").html("");
        return true;
    }
    $("#hoten").blur(kiemtraTen);
    //kiemtra số điện thoại
    function kiemtraSDT(){
        // sửa lại thằng này ----------------------------
        //------------------------------------------------
        // sửa lại thằng này ----------------------------
        //------------------------------------------------
        // sửa lại thằng này ----------------------------
        //------------------------------------------------
        // sửa lại thằng này ----------------------------
        //------------------------------------------------
        // sửa lại thằng này ----------------------------
        //------------------------------------------------
        // sửa lại thằng này ----------------------------
        //------------------------------------------------
        var re = /^(09\d{8})|(08\d{8})|(07\d{8})|(06\d{8})|(03\d{8})$/;
        if($("#sdt").val()==''){
            $("#tbSDT").html("Không bỏ trống");
            return false;
        }
        else if(!re.test($("#sdt").val())){
            $("#tbSDT").html("Nhập đúng định dạng số điện thoại");
            return false;
        }
        $("#tbSDT").html("");
        return true;
    }
    $("#sdt").blur(kiemtraSDT);
    //kiemtramail
    function kiemtraMail(){
        var rex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
        if($("#email").val()==''){
            $("#tbEmail").html("Không bỏ trống");
            return false;
        }
        else if(!rex.test($("#email").val())){
            $("#tbEmail").html("Nhập đúng định dạng email");
            return false;
        }
        $("#tbEmail").html("");
        return true;
    }
    $("#email").blur(kiemtraMail);
    //kiem tra ma
    function kiemtraDiaChi(){
        var re = /^\d{10}/;
        if($("#txtMa").val()==''){
            $("#tbMa").html("Không bỏ trống");
            return false;
        }
        if(!re.test($("#txtMa").val())){
            $("#tbMa").html("MSSV có 10 chữ số");
            return false;
        }
        $("#tbMa").html("*");
        return true;
    }
    $("#txtMa").blur(kiemtraMa);
    //kiem tra taikhoan
    function kiemtraTK(){
        var re = /^\d{10}/;
        if($("#txtMa").val()==''){
            $("#tbMa").html("Không bỏ trống");
            return false;
        }
        if(!re.test($("#txtMa").val())){
            $("#tbMa").html("MSSV có 10 chữ số");
            return false;
        }
        $("#tbMa").html("*");
        return true;
    }
    $("#txtMa").blur(kiemtraMa);
    //kiem tra matkhau
    function kiemtraMK(){
        var re = /^\d{10}/;
        if($("#txtMa").val()==''){
            $("#tbMa").html("Không bỏ trống");
            return false;
        }
        if(!re.test($("#txtMa").val())){
            $("#tbMa").html("MSSV có 10 chữ số");
            return false;
        }
        $("#tbMa").html("*");
        return true;
    }
    $("#txtMa").blur(kiemtraMa);
    //kiem tra nhap lai mat khau
    function kiemtraMK2(){
        var re = /^\d{10}/;
        if($("#txtMa").val()==''){
            $("#tbMa").html("Không bỏ trống");
            return false;
        }
        if(!re.test($("#txtMa").val())){
            $("#tbMa").html("MSSV có 10 chữ số");
            return false;
        }
        $("#tbMa").html("*");
        return true;
    }
    $("#txtMa").blur(kiemtraMa);
    $("#btnSave").click(function(){
        if(kiemtraTen() == true || kiemtraMail() == true || kiemtraMa() == true || kiemtraNgay() ==true){
            var row;
            row = "<tr>";
            row += "<td>" + (i++) + "</td>";
            row += "<td>" + $("#txtMa").val() + "</td>";
            row += "<td>" + $("#txtHoten").val() + "</td>";
            row += "<td>" + $("#txtNgay").val() + "</td>";
            row += "<td>" + $("#txtMail").val() + "</td>";
            row += "<td>" + $("#txtAnh").val() + "</td>";
            row += "</tr>";
            $("#table").append(row);
            $("#myModal").modal("hide");
            return true;
        }
        $("#tb").html("Vui lòng nhập đầy đủ và chính xác cú pháp");
    })
})