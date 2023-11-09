export default async function authenticate(email: string, password: string) {
  const res = await fetch("/api/auth/login", {
    method: "POST",
    body: JSON.stringify({ email, password }),
    headers: { "Content-Type": "application/json" },
  });
  if (res.ok) {
    return await res.json();
  } else {
    return null;
  }
}
