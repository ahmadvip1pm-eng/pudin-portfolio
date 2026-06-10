"use client";

import { useEffect, useState } from "react";

const fallbackProjects = [
  {
    id: "fallback-1",
    title: "Website Portfolio",
    description: "Website personal untuk menampilkan profil, skill, project, dan kontak.",
    image_url: "https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200&auto=format&fit=crop",
    demo_url: "#",
    github_url: "#",
    tech_stack: ["Next.js", "Supabase", "Vercel"],
  },
  {
    id: "fallback-2",
    title: "Landing Page UMKM",
    description: "Landing page sederhana untuk promosi bisnis, produk, dan layanan.",
    image_url: "https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=1200&auto=format&fit=crop",
    demo_url: "#",
    github_url: "#",
    tech_stack: ["SEO", "Responsive", "CSS"],
  },
];

export default function Home() {
  const [projects, setProjects] = useState(fallbackProjects);
  const [loading, setLoading] = useState(true);
  const [formStatus, setFormStatus] = useState("");

  useEffect(() => {
    async function loadProjects() {
      try {
        const response = await fetch("/api/projects");
        const result = await response.json();

        if (response.ok && result.projects?.length) {
          setProjects(result.projects);
        }
      } catch (error) {
        console.log("Gagal mengambil project:", error.message);
      } finally {
        setLoading(false);
      }
    }

    loadProjects();
  }, []);

  async function handleSubmit(event) {
    event.preventDefault();
    setFormStatus("Mengirim pesan...");

    const formData = new FormData(event.currentTarget);

    const payload = {
      name: formData.get("name"),
      email: formData.get("email"),
      message: formData.get("message"),
    };

    try {
      const response = await fetch("/api/messages", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(payload),
      });

      const result = await response.json();

      if (!response.ok) {
        setFormStatus(result.error || "Pesan gagal dikirim.");
        return;
      }

      event.currentTarget.reset();
      setFormStatus("Pesan berhasil dikirim. Terima kasih!");
    } catch (error) {
      setFormStatus("Terjadi error: " + error.message);
    }
  }

  return (
    <>
      <header className="navbar">
        <div className="container nav-inner">
          <a href="#" className="logo">
            Pudin<span>.</span>
          </a>

          <nav className="nav-links">
            <a href="#about">About</a>
            <a href="#skills">Skill</a>
            <a href="#projects">Project</a>
            <a href="#contact">Contact</a>
          </nav>
        </div>
      </header>

      <main>
        <section className="hero">
          <div className="container hero-grid">
            <div>
              <div className="badge">Next.js + Supabase + Vercel</div>
              <h1>Portfolio sederhana, cepat, dan siap online.</h1>
              <p>
                Contoh website portofolio menggunakan Next.js sebagai frontend,
                Supabase sebagai database, dan Vercel sebagai tempat deploy.
              </p>

              <div className="cta-row">
                <a className="btn btn-primary" href="#projects">
                  Lihat Project
                </a>
                <a className="btn btn-ghost" href="#contact">
                  Hubungi Saya
                </a>
              </div>
            </div>

            <div className="profile-card">
              <div className="avatar"></div>
              <h2>Ahmad Vip</h2>
              <p>
                Web developer pemula yang sedang membangun project modern dengan
                stack ringan, rapi, dan mudah dideploy.
              </p>
            </div>
          </div>
        </section>

        <section className="section" id="about">
          <div className="container">
            <div className="section-head">
              <div>
                <h2>Tentang Saya</h2>
                <p className="muted">
                  Saya membuat website yang sederhana, responsif, dan mudah
                  dikembangkan. Project ini dibuat sebagai starter portfolio.
                </p>
              </div>
            </div>
          </div>
        </section>

        <section className="section" id="skills">
          <div className="container">
            <div className="section-head">
              <div>
                <h2>Skill</h2>
                <p className="muted">
                  Beberapa teknologi dasar yang digunakan di project ini.
                </p>
              </div>
            </div>

            <div className="skills">
              <div className="skill">HTML</div>
              <div className="skill">CSS</div>
              <div className="skill">JavaScript</div>
              <div className="skill">Next.js</div>
              <div className="skill">Supabase</div>
              <div className="skill">Vercel</div>
              <div className="skill">GitHub</div>
              <div className="skill">Responsive UI</div>
            </div>
          </div>
        </section>

        <section className="section" id="projects">
          <div className="container">
            <div className="section-head">
              <div>
                <h2>Project</h2>
                <p className="muted">
                  Data project diambil dari Supabase. Kalau database belum aktif,
                  website tetap menampilkan data contoh.
                </p>
              </div>
            </div>

            <div className="projects">
              {loading ? (
                <div className="empty">Memuat data project...</div>
              ) : (
                projects.map((project) => (
                  <article className="project-card" key={project.id}>
                    <div
                      className="project-image"
                      style={{
                        backgroundImage: project.image_url
                          ? `url(${project.image_url})`
                          : undefined,
                      }}
                    ></div>

                    <div className="project-body">
                      <h3>{project.title}</h3>
                      <p>{project.description}</p>

                      <div className="tags">
                        {(project.tech_stack || []).map((tech) => (
                          <span className="tag" key={tech}>
                            {tech}
                          </span>
                        ))}
                      </div>

                      <div className="project-links">
                        <a href={project.demo_url || "#"} target="_blank">
                          Demo
                        </a>
                        <a href={project.github_url || "#"} target="_blank">
                          GitHub
                        </a>
                      </div>
                    </div>
                  </article>
                ))
              )}
            </div>
          </div>
        </section>

        <section className="section" id="contact">
          <div className="container contact-grid">
            <div className="contact-box">
              <h2>Kontak</h2>
              <p>
                Form ini akan menyimpan pesan ke table <b>messages</b> di
                Supabase. Cocok untuk portfolio sederhana.
              </p>
              <p>Email: ahmadvip1pm@gmail.com</p>
            </div>

            <div className="form-card">
              <form className="form" onSubmit={handleSubmit}>
                <input className="input" name="name" placeholder="Nama" />
                <input className="input" name="email" placeholder="Email" type="email" />
                <textarea className="input" name="message" placeholder="Pesan"></textarea>

                <button className="btn btn-primary" type="submit">
                  Kirim Pesan
                </button>

                <div className="status-message">{formStatus}</div>
              </form>
            </div>
          </div>
        </section>
      </main>

      <footer className="footer">
        <div className="container">
          © {new Date().getFullYear()} Ahmad Vip. Built with Next.js + Supabase.
        </div>
      </footer>
    </>
  );
}
