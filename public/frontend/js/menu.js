
 // Lấy tham chiếu đến các phần tử
var menuIcon = document.getElementById('menu-icon');
var navigation = document.getElementById('navigation');
      
// Thêm sự kiện ấn vào biểu tượng menu
menuIcon.addEventListener('click', function() {
// Kiểm tra trạng thái hiển thị của phần điều hướng
var isNavVisible = navigation.style.display === 'block';
      
// Đảo ngược trạng thái hiển thị của phần điều hướng
navigation.style.display = isNavVisible ? 'none' : 'block';
});
