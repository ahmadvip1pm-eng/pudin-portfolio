import './globals.css';

export const metadata = {
  title: 'Cek Website Vercel',
  description: 'Simple health check website menggunakan Next.js untuk deploy ke Vercel.',
};

export default function RootLayout({ children }) {
  return (
    <html lang="id">
      <body>{children}</body>
    </html>
  );
}
