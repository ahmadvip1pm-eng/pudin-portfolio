import { supabase, isSupabaseConfigured } from "@/lib/supabase";

export async function POST(request) {
  if (!isSupabaseConfigured) {
    return Response.json(
      {
        error: "Supabase belum dikonfigurasi.",
      },
      { status: 500 }
    );
  }

  const body = await request.json();
  const name = String(body.name || "").trim();
  const email = String(body.email || "").trim();
  const message = String(body.message || "").trim();

  if (!name || !email || !message) {
    return Response.json(
      {
        error: "Nama, email, dan pesan wajib diisi.",
      },
      { status: 400 }
    );
  }

  const { error } = await supabase.from("messages").insert({
    name,
    email,
    message,
  });

  if (error) {
    return Response.json({ error: error.message }, { status: 500 });
  }

  return Response.json({
    success: true,
    message: "Pesan berhasil dikirim.",
  });
}
