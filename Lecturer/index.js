document.addEventListener('DOMContentLoaded', function () {
    // Hàm ẩn tất cả các phần nội dung
    function hideAllContents() {
        document.getElementById('welcome-content').style.display = 'none';
        document.getElementById('course-content').style.display = 'none';
        document.getElementById('edit-course-material-content').style.display = 'none';
    }

    // Xử lý hiển thị nội dung quản lý khóa học khi nhấn vào "Course Manager"
    document.getElementById('course-manager-link').addEventListener('click', function (event) {
        event.preventDefault();
        hideAllContents();
        document.getElementById('course-content').style.display = 'block';
    });

    // Xử lý khi nhấn vào nút "Edit" trong danh sách khóa học
    document.querySelectorAll('.edit-button').forEach(button => {
        button.addEventListener('click', function () {
            hideAllContents();

            // Lấy tên khóa học và CourseID từ các thuộc tính của nút "Edit"
            const courseName = this.getAttribute('data-course-name');
            const courseId = this.getAttribute('data-course-id');

            // Thiết lập giá trị mặc định trong form chỉnh sửa
            document.getElementById('course-material-title').value = `${courseName} Material`;
            document.getElementById('course-material-content').value = "Nội dung của khóa học...";

            // Hiển thị phần chỉnh sửa khóa học
            document.getElementById('edit-course-material-content').style.display = 'block';
        });
    });

    // Xử lý hủy chỉnh sửa và quay lại danh sách khóa học
    window.cancelEditCourseMaterial = function () {
        hideAllContents();
        document.getElementById('course-content').style.display = 'block';
    }

    // Xử lý gửi form khi người dùng lưu nội dung khóa học
    document.getElementById('edit-course-material-form').addEventListener('submit', function (event) {
        event.preventDefault();
        alert("Material updated successfully!");
        hideAllContents();
        document.getElementById('course-content').style.display = 'block';
    });
});
