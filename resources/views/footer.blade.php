<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All-in-One Static Header and Footer</title>
    
    <style>

        /* ==========================================
           4. FOOTER STYLES (Matching Theme)
           ========================================== */
        .site-footer {
            background-color: #ffffff;
            border-top: 1px solid #e2e8f0;
            padding: 40px 0 20px 0;
            width: 100%;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .footer-info {
            flex: 1;
            min-width: 250px;
            margin-bottom: 20px;
        }

        .footer-info p {
            color: #777;
            font-size: 14px;
            margin-top: 10px;
            max-width: 300px;
        }

        .footer-links {
            display: flex;
            gap: 50px;
            margin-bottom: 20px;
        }

        .footer-col h4 {
            color: #333;
            font-size: 16px;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col li {
            margin-bottom: 10px;
        }

        .footer-col a {
            text-decoration: none;
            color: #666;
            font-size: 14px;
            transition: color 0.2s ease;
        }

        .footer-col a:hover {
            color: #0076ff;
        }

        .footer-bottom {
            max-width: 1200px;
            margin: 20px auto 0 auto;
            padding: 20px 20px 0 20px;
            border-top: 1px solid #f0f4f8;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .footer-bottom p {
            color: #999;
            font-size: 13px;
        }

        .footer-socials a {
            color: #777;
            text-decoration: none;
            font-size: 14px;
            margin-left: 15px;
            transition: color 0.2s ease;
        }

        .footer-socials a:hover {
            color: #0076ff;
        }
    </style>
</head>
<body>

  
    <footer class="site-footer">
        <div class="footer-container">
            
            <div class="footer-info">
                <div class="logo">
                    <a href="#">Brand<span>Name</span></a>
                </div>
                <p>Building clean, responsive, and modern web experiences with seamless HTML and CSS components.</p>
            </div>

            <div class="footer-links">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 BrandName. All rights reserved.</p>
            <div class="footer-socials">
                <a href="#">Twitter</a>
                <a href="#">LinkedIn</a>
                <a href="#">GitHub</a>
            </div>
        </div>
    </footer>

</body>
</html>