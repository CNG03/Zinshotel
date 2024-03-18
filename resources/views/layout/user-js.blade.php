<script>
    // Khởi tạo biến để theo dõi trạng thái hiển thị của thẻ div
    var slideInDivVisible = false;
    
    document.getElementById('userIcon').addEventListener('click', function() {
        // Nếu thẻ div không hiển thị, thì hiển thị nó
        if (!slideInDivVisible) {
            document.getElementById('slideInDiv').style.right = '10px'; // Hiển thị thẻ div di chuyển vào màn hình
            slideInDivVisible = true;
            document.getElementById('wrapper').style.opacity = '0.5';
            document.getElementById('footer_wrapper').style.opacity = '0.5';
        } else {
            // Nếu thẻ div đang hiển thị và người dùng click vào icon lần nữa, thì ẩn nó đi
            document.getElementById('slideInDiv').style.right = '-1300px'; // Ẩn thẻ div di chuyển ra ngoài màn hình
            slideInDivVisible = false;
            document.getElementById('wrapper').style.opacity = '1';
            document.getElementById('footer_wrapper').style.opacity = '1';
        }
    });
    
    // Nếu bạn muốn ẩn thẻ div khi người dùng click ra ngoài nó
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.container')) {
            // Ẩn thẻ div chỉ khi nó đang hiển thị
            if (slideInDivVisible) {
                document.getElementById('slideInDiv').style.right = '-1300px'; // Ẩn thẻ div di chuyển ra ngoài màn hình
                slideInDivVisible = false;
                document.getElementById('wrapper').style.opacity = '1';
                document.getElementById('footer_wrapper').style.opacity = '1';
            }
        }
    });
    
    </script>