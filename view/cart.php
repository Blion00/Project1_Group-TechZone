<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="./public/DuAn_Group-4people/CSS/cart.css">
</head>
<div class="container">
        <div class="header">
            <h2>Giỏ Hàng</h2>
        </div>
        <div class="delivery-method">
            <label><input type="radio" name="delivery" checked> Giao tận nơi</label>
            <label><input type="radio" name="delivery"> Nhận tại siêu thị</label>
        </div>
        <div class="locationcart">
            <label for="locationcart">Vui lòng cung cấp thông tin nhận hàng:</label>
            <select id="locationcart">
              <option>Hồ Chí Minh</option><br>
            </select>
          </div> <br>
        <div class="product">
            <img src="./public/DuAn_Group-4people/images/product-kecuoi-sp1.jpg" alt="iPhone 15 128GB Pink">
            <div class="product-details">
                <h3>Điện thoại iPhone 15 128GB</h3>
                <select class="bot">
                    <option>Màu Hồng nhạt</option> 
                </select>
                <p class="bot" style="color: rgb(61, 61, 190);margin-left:-70px;">Online giá rẻ quá</p>
                <p class="masale" style="margin-top: 10px;">- Nhập mã VNPAYTGDG5 giảm từ 50,000đ đến 200,000đ (áp dụng tùy giá trị đơn hàng) khi thanh toán qua VNPAY-QR.</p>
            </div>
            <div class="product-price">19.790.000đ</div>
            <div class="quantity-container">
                <span class="delete">Xóa</span>
                <div class="quantity-control">
                  <button class="quantity-btn">−</button>
                  <span class="quantity">1</span>
                  <button class="quantity-btn">+</button>
                </div>
              </div>
        </div>
        <div class="textcart">
            <p>Tạm tính (1 sản phẩm):</p>
            <p>19.790.000đ</p>
        </div>
    </div>
    <div class="container2">
        <div class="special-requests">
            <h3>Yêu cầu đặc biệc:</h3><br>
            <label><input type="checkbox"> Chuyển danh bạ, dữ liệu qua máy mới</label><br>
            <label><input type="checkbox"> Xuất hóa đơn công ty</label><br>
            <label><input type="checkbox"> Yêu cầu khác</label>
        </div>
    </div>
    <div class="container3">
        <div class="option">
            <label>Sử dụng mã giảm giá</label>
            <input type="text" placeholder="Nhập mã giảm giá">
            <button>Sử dụng</button>
        </div>
        <div class="option">
            <label>Dùng điểm Quà Tặng VIP</label>
            <input type="text" placeholder="Nhập số điểm">
            <button>Sử dụng</button>
        </div>
        <div class="sum">
            <p class="sum1">Tổng tiền: <span>19,790,000₫</span></p>
            <p class="give">Điểm Quà Tặng VIP tích lũy: <span>19,790 điểm</span></p>
        </div>
    </div>
    <div class="container4">
        <div class="payment-options">
            <h4>Hình thức thanh toán</h4>
            <label><input type="radio" name="payment" checked> Thanh toán tiền mặt khi nhận hàng</label><br>
            <label><input type="radio" name="payment"> Chuyển khoản ngân hàng</label>
          </div>
      
          <div class="terms">
            <label><input type="checkbox"> Tôi đồng ý với <a href="">Chính sách xử lý dữ liệu cá nhân</a> của TechZone.com</label>
          </div>
          <button class="submit-btn">Đặt hàng</button>
        </div>
    </div>