import mysql.connector
import os

db = mysql.connector.connect(
    host = "localhost",
    user = "root",
    passwd = "",
    database = "simkasu"
)


# SENSOR PH
def insert_data_ph(db):
    ph_before = input("Masukan Ph Before :")
    ph_after = input("Masukan Ph After :")
    waktu_perbaikan = input("Masukan Waktu Perbaikan :")
    val = (ph_before,ph_after,waktu_perbaikan)
    cursor = db.cursor()
    sql = "INSERT INTO ph_air (ph_before,ph_after,waktu_perbaikan) VALUES (%s,%s,%s)"
    cursor.execute(sql,val)
    db.commit()
    print("Data Berhasil Disimpan")

def show_data_ph(db):
    cursor = db.cursor()
    sql = "SELECT * FROM ph_air"
    cursor.execute(sql)
    results = cursor.fetchall()

    if cursor.rowcount < 0 :
       print("Tidak ada data")
    else :
     for data in results :
       print(data)

def update_data_ph(db):
    cursor = db.cursor()
    show_data_ph(db)
    id_ph_air = input("Masukan Id Ph Air")
    ph_before = input("Masukan Ph Before Baru :")
    ph_after = input("Masukan Ph After Baru :")
    waktu_perbaikan = input("Masukan Waktu Perbaikan Baru :")

    sql = "UPDATE ph_air SET ph_before=%s, ph_after=%s, waktu_perbaikan=%s WHERE id_ph_air=%s"
    val = (ph_before,ph_after,waktu_perbaikan,id_ph_air)
    cursor.execute(sql,val)
    db.commit()
    print("Data Berhasil Diubah")

def delete_data_ph(db):
    cursor = db.cursor()
    show_data_ph(db)
    id_ph_air = input("Masukan Id Ph Air > ")
    sql = "DELETE FROM ph_air WHERE id_ph_air = %s"
    val = (id_ph_air,)
    cursor.execute(sql,val)
    db.commit()
    print("Data Berhasil Dihapus")

# SENSOR SUHU

def insert_data_suhu(db):
    temp_before = input("Masukan Temp Before :")
    temp_after = input("Masukan Temp After :")
    waktu_perbaikan = input("Masukan Waktu Perbaikan :")
    val = (temp_before,temp_after,waktu_perbaikan)
    cursor = db.cursor()
    sql = "INSERT INTO temperature_kandang (temp_before,temp_after,waktu_perbaikan) VALUES (%s,%s,%s)"
    cursor.execute(sql,val)
    db.commit()
    print("Data Berhasil Disimpan")

def show_data_suhu(db):
    cursor = db.cursor()
    sql = "SELECT * FROM temperature_kandang"
    cursor.execute(sql)
    results = cursor.fetchall()

    if cursor.rowcount < 0 :
       print("Tidak ada data")
    else :
     for data in results :
       print(data)

def update_data_suhu(db):
    cursor = db.cursor()
    show_data_suhu(db)
    id_temp_kandang = input("Masukan Id Temp Kandang")
    temp_before = input("Masukan Temp Before Baru :")
    temp_after = input("Masukan Temp After Baru :")
    waktu_perbaikan = input("Masukan Waktu Perbaikan Baru :")

    sql = "UPDATE temperature_kandang SET temp_before=%s, temp_after=%s, waktu_perbaikan=%s WHERE id_temp_kandang=%s"
    val = (temp_before,temp_after,waktu_perbaikan,id_temp_kandang)
    cursor.execute(sql,val)
    db.commit()
    print("Data Berhasil Diubah")

def delete_data_suhu(db):
    cursor = db.cursor()
    show_data_suhu(db)
    id_temp_kandang = input("Masukan Id Temp Kandang > ")
    sql = "DELETE FROM temperature_kandang WHERE id_temp_kandang = %s"
    val = (id_temp_kandang,)
    cursor.execute(sql,val)
    db.commit()
    print("Data Berhasil Dihapus")

def show_menu(db):
    print("===Program Sensor Suhu====")
    print("1. Insert Data Ph")
    print("2. Insert Data Temperatur Kandang")
    print("3. Tampilkan Data Ph")
    print("4. Tampilkan Data Temperature Kandang")
    print("5. Update Data Ph")
    print("6. Update Data Temperature Kandang")
    print("7. Hapus Data Ph")
    print("8. Hapus Data Temperature Kandang")
    print("0. Keluar")
    print('-------------')
    menu = input("Pilih Menu > ")

    os.system("cls")

    if menu == "1":
        insert_data_ph(db)
    elif menu == "2":
        insert_data_suhu(db)
    elif menu == "3":
        show_data_ph(db)
    elif menu == "4":
        show_data_suhu(db)
    elif menu == "5":
        update_data_ph(db)
    elif menu == "6":
        update_data_suhu(db)
    elif menu == "7":
        delete_data_ph(db)
    elif menu == "8":
        delete_data_suhu(db)
    elif menu == "0":
        exit()
    else :
        print("Menu Salah !")

if __name__ == "__main__":
    while(True):
     show_menu(db)