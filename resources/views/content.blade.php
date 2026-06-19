<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All-in-One Template with Centered Content</title>
    
    <style>

        .content-wrapper {
            flex: 1;               /* Pushes the footer down to the bottom */
            margin-top: 70px;      /* Prevents content from going under the fixed header */
            display: flex;
            align-items: center;   /* Center vertically */
            justify-content: center;/* Center horizontally */
            padding: 40px 20px;
        }

        /* The card that contains your layout content */
        .center-card {
            background-color: #ffffff;
            padding: 50px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            max-width: 650px;
            width: 100%;
            text-align: center;    /* Center text alignments */
        }

        .center-card h1 {
            color: #222;
            font-size: 32px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .center-card p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        /* Accent call-to-action button */
        .cta-btn {
            display: inline-block;
            background-color: #0076ff;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 6px;
            font-weight: 600;
            transition: background-color 0.2s ease, transform 0.2s ease;
        }

        .cta-btn:hover {
            background-color: #005fd1;
            transform: translateY(-2px);
        }

    </style>
</head>
<body>



    <!-- Main Content Area (Centered) -->
    <main class="content-wrapper">
        <section class="center-card">
            <h1>Perfectly Centered Layout</h1>
            <p>This content section sits in a beautiful wrapper card that handles all alignment automatically. Utilizing modern CSS Flexbox layout structures, your text and action components stay completely dead-center vertically and horizontally between the header and footer.</p>
            <a href="#" class="cta-btn">Get Started</a>
        </section>
    </main>
</body>
</html>