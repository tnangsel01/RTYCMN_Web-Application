CREATE TABLE 'items' (
    'itemID' int(20) NOT NULL,
    'itemName' varchar(20) NOT NULL,
    'price' varchar(10) NOT NULL,
    'created_at' datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    'modified_at' datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
)

CREATE TABLE 'itemImages' (
    'imageID' int(1,1) NOT NULL,
    'imageName' varchar(40) NOT NULL,
    'originalFormat' nvarchar(5) NOT NULL,
    'imageFile' varbinary(max) NOT NULL
)

insert into 'items' ('Item_Id', 'Item_Name', 'Item_Price')VALUES
(500, 'Back Pack', '$20.99'),
(501, 'Bracelet', '$15.99'),
(502, 'Flag', '$25.99'),
(503, 'Handbag', '$30.99'),
(504, 'Hoodie Jacket', '$50.99'),
(505, 'Key Chain', '$8.99'),
(506, 'Logo', '$3.99'),
(507, 'Shirt', '$40.99');


insert into 'itemImages' ('imageName', 'originalFormat', 'imageFile')
Select 'storePics', 'jpg', 'imageFile'
FROM Openrowset( Bulk 'C:\xampp\htdocs\storePics\bag_pack.jpg', Single_Blob) as ImageSource('imageFile'),
( Bulk 'C:\xampp\htdocs\storePics\bracelet.jpg', Single_Blob) as ImageSource('imageFile'),
( Bulk 'C:\xampp\htdocs\storePics\flag.jpg', Single_Blob) as ImageSource('imageFile'),
( Bulk 'C:\xampp\htdocs\storePics\handbag.jpg', Single_Blob) as ImageSource('imageFile'),
( Bulk 'C:\xampp\htdocs\storePics\hoodie_jacket.jpg', Single_Blob) as ImageSource('imageFile'),
( Bulk 'C:\xampp\htdocs\storePics\key_chain.jpg', Single_Blob) as ImageSource('imageFile'),
( Bulk 'C:\xampp\htdocs\storePics\logo.jpg', Single_Blob) as ImageSource('imageFile'),
( Bulk 'C:\xampp\htdocs\storePics\shirt.jpg', Single_Blob) as ImageSource('imageFile');
