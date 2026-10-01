# Đề tài 29: Website Công thức nấu ăn (Recipe Web Application) - DevOps Deployment & Monitoring
> - **Sinh viên thực hiện:** Nguyễn Việt Đức
> - **Mã sinh viên:** DTC245180127
> - **Trường:** Đại học Công nghệ Thông tin và Truyền thông (ICTU)

---

Kho lưu trữ này chứa mã nguồn và toàn bộ cấu hình hạ tầng DevOps cho Đề tài 29: Xây dựng và triển khai Website Công thức nấu ăn tích hợp hệ thống giám sát và quản lý log tập trung.

## 🏗️ 1. Kiến trúc hệ thống
Hệ thống được đóng gói và vận hành hoàn toàn bằng **Docker Compose**, bao gồm các service chính:
- **WordPress / Web App**: Nền tảng website công thức nấu ăn.
- **Nginx Reverse Proxy**: Cổng giao tiếp chính, cấu hình HTTPS (SSL tự ký) và các Security Headers.
- **Prometheus**: Thu thập các chỉ số (metrics) hiệu năng hệ thống và tài nguyên.
- **Grafana**: Trực quan hóa dữ liệu giám sát qua các Dashboard trực quan.
- **Loki & Promtail**: Thu thập, tập trung hóa và truy vấn log hệ thống (LogQL).

---

## 📂 2. Cấu trúc Thư mục
```text
.
├── html/                # Mã nguồn website / WordPress theme
├── nginx/               # Cấu hình Nginx Reverse Proxy & SSL
├── Prometheus/          # Cấu hình thu thập metrics
├── Loki/                # Cấu hình lưu trữ và quản lý log
├── promtail/            # Cấu hình đẩy log về Loki
└── docker-compose.yml   # File cấu hình triển khai toàn bộ hệ thống
```

---

## ⚙️ 3. Yêu cầu Môi trường (Prerequisites)
Trước khi khởi chạy hệ thống, máy host cần cài đặt sẵn:
- **Git** (phiên bản 2.x trở lên)
- **Docker Engine** (phiên bản 20.10 trở lên)
- **Docker Compose** (v1.29+ hoặc v2.x)

---

## 🚀 4. Hướng dẫn Triển khai (Deployment)

### 4.1. Clone repository về máy:
```bash
git clone [https://github.com/dtc245180127-hub/dt29-recipe-app.git](https://github.com/dtc245180127-hub/dt29-recipe-app.git)
cd dt29-recipe-app
```

### 4.2. Khởi động toàn bộ hệ thống bằng Docker Compose:
```bash
docker-compose up -d
```

### 4.3. Kiểm tra trạng thái các Container:
```bash
docker-compose ps
```

---

## 🔑 5. Thông tin Truy cập các Service

| Service | Đường dẫn (URL) | Tài khoản mặc định |
| :--- | :--- | :--- |
| **Website Công thức nấu ăn** | `https://localhost` | Khởi tạo khi truy cập lần đầu |
| **Grafana Dashboard** | `http://localhost:3000` | `admin` / `admin` |
| **Prometheus UI** | `http://localhost:9090` | Không yêu cầu |
| **Loki Log API** | `http://localhost:3100` | Kết nối trực tiếp qua Grafana |
