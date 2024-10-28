    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail_lecturer</title>
        <link rel="stylesheet" href="../css/News2.css">
        <link rel="stylesheet" href="../css/Blog.css">
    </head>

    <body>
        <?php include '../Component/Header.php';?>
        <!--Banner Section-->
        <div class="containerline">
            <!-- Text section of the banner -->
            <p>
    <span style="font-size: 24px; color: blue;">Home</span> 
    <span style="font-size: 12px;">/News</span>
</p>

           <h3 style="font-size: 35px; font-weight: bold; display: inline; margin-left: 10px; color: black; text-align: center;">
            ReactJS with Typescript [Series]. Phần 1 Basic Typescript

           </h3>
        </div>
        <!-- About -->
        <div class="content-line">
            <h3>Chào các bạn cộng đồng lập trình f8 mình cũng là một thành viên.Hôm nay mình muốn viết một series về ReactJS
                kết hợp với typescript . Mình mong mọi người sẽ đón nhận và trao đổi kiến thức với nhau.Bài viết này sẽ viết
                về những điều tuyệt vời và hay ho khi làm việc với typescript nhé.</h3>
                <p>Bài viết này sẽ bao gồm các phần như sau:</p>
                <ol>
                <li> Giới thiệu về Typescript và cách cài đặt</li>
                <li> Cách cài đặt</li>
            </ol>
            <h3>I. Giới thiệu về Typescript và cách cài đặt</h3>
            <br>
            <h3>1.1 Typescript là gì? Điểm mạnh và tại sao nên sử dụng.</h3>
                <ul>
                    <li>TypeScript là một dự án mã nguồn mở được phát triển bởi Microsoft, nó có thể được coi
                        là một phiên bản nâng cao của Javascript bởi việc bổ sung tùy chọn kiểu tĩnh và lớp hướng
                        đối tượng mà điều này không có ở Javascript. TypeScript có thể sử dụng để phát triển các ứng
                        dụng chạy ở client-side (Angular2) và server-side (NodeJS).
                </li>
            </ul>
            <img src="https://velog.velcdn.com/images/yjyoo/post/97efe685-de1e-4fb5-b399-589a03b4a293/image.png" alt="Project Image", width="850px", height="350px" style="border-radius:10px;">
                <ul>
                    <li>Như hình ở trên các bạn có thể thấy Typescript bao trọn Javascript và ES6
                        ngoài ra còn có Interfaces,Strongly Typed và Generics nữa cấu tạo thành Typescript.
                        Qua đó chúng ta thấy Typescript sử dụng tất các các tính năng của ES6(ECMAScript 2015) như là class,
                        module, destructuring...ngoài ra còn sử dụng các Interfaces, Generics ngoài ra còn có một số tính năng 
                        khác mình sẽ nói rõ ở phần dưới.Nhưng bản chất Typescript cũng sẽ compiles ra Javascript cũng có thể nói
                        là Typescript là Javascript và browser thì không thể đọc được Typescript nên mới cần biên dịch ra Javascript
                            để thực thi các lệnh và đó là đôi giới thiệu qua về Typescript.</li>
                </ul>
            <h3>2 Vậy tại sao nên dùng Typescript.</h3>
            <ul>
                <li><p><strong>Dễ học và dễ code:</strong> Vì được kế thừa cũng như dựa trên các cú pháp từ JavaScript và code
                theo kiểu hướng đối tượng như class, interface, generics... nên sẽ dễ tiếp cận.</p>
                </li>
                <li><p><strong>Dễ scale dự án :</strong> Với việc sử dụng các kỹ thuật mới nhất và lập trình hướng đối tượng
                nên TypeScript giúp chúng ta phát triển các dự án lớn một cách dễ dàng.Việc code dự án javascript với dự án càng
                lớn thì sẽ có rất nhiều kiểu dữ liệu đầu vào và đầu ra khác nhau và việc chúng ta phải nhớ hoặc phải mò lại code
                rất khổ sở cũng như không rõ sẽ làm cho việc code trở nên khó khăn nhưng đối với Typescript thì chúng ta sẽ biết rõ 
                dữ liệu đầu vào (input) cũng như dữ liệu đầu ra (output) một cách rõ ràng giúp chúng ta thuận tiện khi code.
                Ngoài ra nó còn được phát triển bởi microsoft nên khi sử dụng cùng với VScode sẽ có rất nhiều các extendsions 
                giúp hỗ trợ nhắc lệnh hoặc báo lỗi rất tốt.</p>
                </li>
                <li><p><strong>Được nhiều người sử dụng cũng như các Framework sự dụng : </strong> Typescript được mọi người sử dụng Javascript rất yêu
                thích và chuyển qua sử dụng ngoài ra còn có các Framework khuyên khích sử dụng như ReactJS,AngularJS nên sẽ có cộng đồng phát triển rất mạnh
                hỗ trợ việc chúng ta học và làm viêc.</p>
                </li>
            </ul>
            <h3>II. Cách cài đặt</h3>
                <p>1.Cài đặt Typescript Global</p>
                <ul>
                <li><p><strong>Chạy lệnh :</strong> npm install -g typescript  ở terminal. Các bạn lưu ý là trong máy đã cài Nodejs
                để có thể install.</p>
                </li>
            </ul>
            <img src="https://files.fullstack.edu.vn/f8-prod/blog_posts/3523/628086ee384c6.png" alt="Project Image", width="850px", height="350px" style="border-radius: 10px;">
            <p>sau khi install thành công thì các bạn sự dụng lệnh tsc -v để kiểm tra</p>
            <ul>
                <li><p><strong>Cách để chạy thử file typescript :</strong></p>
                </li>
            </ul>
            <img src="https://files.fullstack.edu.vn/f8-prod/blog_posts/3523/628087b02b1aa.png" alt="Project Image", width="850px", height="350px" style="border-radius: 10px;">
                <p>Đầu tiên mình tạo ra một file blog.ts là một file Typescript với nội dung như hình.Để compile ra file
                    Javascript mình sử dụng lệnh tsc blog.ts để tạo ra file blog.js để thực thi các lệnh.Và cuối cùng để thực
                    thi file blog.js thì ta dùng lệnh node blog.js và đây là kết quả.</p>
                    <img src="https://files.fullstack.edu.vn/f8-prod/blog_posts/3523/628088a685b97.png" alt="Project Image", width="850px", height="350px" style="border-radius: 10px;">
                <p>Và chúng ta đã thực thi thành công.</p>
                <p>2.Tạo dự án ReactJS + Typescript.</p>
            <ul>
                <li><p><strong>Sử dụng create-react-app :</strong>Nếu các bạn chưa biết về create-react-app thì đầy là một công cụ giúp
                chúng ta có thể triển khai một dự án ReactJS nhanh chóng và hiệu quả. Vậy làm sao để có thể sử dụng create-react-app để
                tạo dự án kết hợp ReactJS + Typescript ? Thật may là rất dễ dàng để làm điều đó với một dòng lệnh. Đói với
                npm npx create-react-app my-app --template typescript Hoặc với yarn yarn create react-app my-app --template typescript.</p>
                </li>
            </ul>
            <img src="https://files.fullstack.edu.vn/f8-prod/blog_posts/3523/62808cd14863d.png" alt="Project Image", width="850px", height="350px" style="border-radius: 10px;">
                <p>Sau khi tạo dự án thành công thì dự án sẽ có các thư mục như một dự án bình thường ngoài ra còn có thêm 
                    file tsconfig.json để chúng ta config cho typescript.Các bạn có thể cd vào dự án và chạy lênh npm start or yarn 
                    start để chạy dự án thử.</p>
                    <ul>
                <li><p><strong>Add Typescript với dự án React có sẳn :</strong> Chúng ta sẽ add typescript các type cho node, react-dom,
                react với câu lệnh npm install --save typescript @types/node @types/react @types/react-dom @types/jest or yarn add typescript
                @types/node @types/react @types/react-dom @types/jest. Sau đó chúng ta sẽ sửa các file .js sang .ts và sửa các file bị lỗi
                nếu có vì có chưa có các type quá trình này sửa khác là mệt đây là một cách add Ts vào dự án các bạn có thể tham khảo.</p>
                </li>
            </ul>
            <hr>
            <h3 style="text-align: center;">Bài Viết Nổi Bật Khác</h3>
            <h3>News</h3>
        <section class="news">
            <div class="cards-new">
                <!-- Repeatable Card Structure -->
                <div class="card">
                    <img src="news-image1.png" alt="News 1">
                    <h3>News Title 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button>Read More</button>
                </div>
                <div class="card">
                    <img src="news-image1.png" alt="News 1">
                    <h3>News Title 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button>Read More</button>
                </div>
                <div class="card">
                    <img src="news-image1.png" alt="News 1">
                    <h3>News Title 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button>Read More</button>
                </div>
            </section>
        </div>
       
        <?php include '../Component/Footer.php';?>
    </body>

