
 // Lấy tham chiếu đến các phần tử
var menuIcon = document.getElementById('menu-icon');
var container = document.getElementById('container');
      
// Thêm sự kiện ấn vào biểu tượng menu
menuIcon.addEventListener('click', function() {
// Kiểm tra trạng thái hiển thị của phần điều hướng
var isNavVisible = container.style.display === 'block';
      
// Đảo ngược trạng thái hiển thị của phần điều hướng
container.style.display = isNavVisible ? 'none' : 'block';
});
