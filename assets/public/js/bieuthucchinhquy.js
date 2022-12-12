$(document).ready(function(e){
    var i = 1;
    //hàm kiểm tra tên
    function kiemtraTen(){
        let re = /^[A-Z][a-z]+(\s[A-Z][a-z]+)+$/;
        if($("#hoten").val() == ''){
            $("#tbHoten").html("Không bỏ trống");
            return false;
        }
        if(!re.test($("#txtHoten").val())){
            $("#tbHoten").html("Kí tự đầu in hoa");
            return false;
        }
        $("#tbHoten").html("*");
        return true;
    }
    $("#txtHoten").blur(kiemtraTen);
    //kiemtramail
    function kiemtraMail(){
        // var re = /^[a-zA-Z0-9.\_\-]+@([a-zA-Z0-9])+.\w{3}+.\w{3}+.\w{2}$/;
        if($("#txtMail").val()==''){
            $("#tbMail").html("Không bỏ trống");
            return false;
        }
        if(!re.test($("#txtMail").val())){
            $("#tbMail").html("Nhập đúng định dạng xxxxxx@iuh.edu.vn");
            return false;
        }
        $("#tbMail").html("*");
        return true;
    }
    $("#txtMail").blur(kiemtraMail);
    //kiem tra ma
    function kiemtraMa(){
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
    //kiemtrangay
    function kiemtraNgay(){
        if($("#txtNgay").val() == ''){
            $("#tbNgay").html("Không bỏ trống");
            return false;
        }
        var day = new Date($("#txtNgay").val());
        var today = new Date();
        today.setDate(today.getDate()+7);
        if(day < today){
            $("#tbNgay").html("Phải sau ngày hiện tại 7 ngày");
            return false;
        }
        $("#tbNgay").html("*");
        return true;
    }
    $("#txtNgay").blur(kiemtraNgay);
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