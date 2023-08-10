Tahapan Pembuatan Program Point Of Sales (on progress)

TARGET 30 AGUSTUS 2023 -> DEADLINE
==============================
MANAGEMENT USERS

Table 
users (id, username, email, password, reset_password, is_active)
biodata (nama, tanggal_lahir, tempat_lahir, status, alamat provinsi, kota, no_telp )

table user dan biodata berelasi.

Fitur
=> Add user
=> Edit user
=> Delete user

ROLES (use spatie packages)

=> Add role
=> Edit role
=> Delete role
=> User has role
=> Role has permission


=====================================================================================
=====================================================================================

TARGET 15 SEPTEMBER 2023 -> DEADLINE
==============================

CATEGORY

Table => id, catagory, description

Fitur
=> Add catagory
=> Edit catagory
=> Delete catagory

SATUAN (ITEMS)
Table => id, statuan, description

Fitur
=> Add statuan
=> Edit statuan
=> Delete statuan

PRODUCT
Table => id, category_id, satuan_id, barcode, nama_barang, harga_beli, harga_jual, stok

Table product berelasi category dan satuan

Fitur
=> Add product
=> Edit product
=> Delete product

**UNTUK YANG LAINNYA MENYUSUL DAN MASIH TAHAP PENYUSUNAN APLIKASI POINT OF SALES**
=====================================================================================
