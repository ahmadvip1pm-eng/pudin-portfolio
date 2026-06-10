import "./globals.css";

export const metadata = {
  title: "Portfolio Next.js Supabase",
  description: "Website portfolio sederhana dengan Next.js, Supabase, dan Vercel",
};

export default function RootLayout({ children }) {
  return (
    <html lang="id">
      <body>{children}</body>
    </html>
  );
}
