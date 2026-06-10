export async function GET() {
  return Response.json({
    status: 'online',
    website: 'running',
    api: 'active',
    message: 'Website Next.js berjalan normal di Vercel.',
    time: new Date().toISOString(),
  });
}
