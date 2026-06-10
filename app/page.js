async function getHealthStatus() {
  return {
    website: 'online',
    api: '/api/health',
    environment: process.env.NODE_ENV || 'production',
    time: new Date().toISOString(),
  };
}

export default async function Home() {
  const status = await getHealthStatus();

  return (
    <main className="page-shell">
      <section className="status-card">
        <div className="badge">System Status</div>

        <h1>Website Online</h1>

        <p className="description">
          Aplikasi Next.js berhasil berjalan. Project ini siap di-upload ke GitHub
          dan langsung di-deploy ke Vercel.
        </p>

        <div className="status-grid">
          <div className="status-item">
            <span>Frontend</span>
            <strong className="success">Running</strong>
          </div>

          <div className="status-item">
            <span>API Health</span>
            <strong className="success">Active</strong>
          </div>

          <div className="status-item">
            <span>Environment</span>
            <strong>{status.environment}</strong>
          </div>

          <div className="status-item">
            <span>Last Check</span>
            <strong>{new Date(status.time).toLocaleString('id-ID')}</strong>
          </div>
        </div>

        <div className="actions">
          <a href="/api/health" className="button primary">
            Cek API Status
          </a>
          <a href="https://vercel.com" target="_blank" className="button secondary">
            Deploy ke Vercel
          </a>
        </div>

        <p className="note">
          Endpoint JSON tersedia di <code>/api/health</code>.
        </p>
      </section>
    </main>
  );
}
