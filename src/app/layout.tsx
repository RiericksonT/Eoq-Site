import type { Metadata } from "next";
import { Inter } from "next/font/google";
import "@/styles/globals.scss";
import Head from "next/head";
import Providers from "./components/providers";

const inter = Inter({ subsets: ["latin"] });

export const metadata: Metadata = {
  title: "É o que?",
  description: "Rede social para você compartilhar suas dúvidas",
};

export default function RootLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  return (
    <html lang="pt-br">
      <Head>
        <link rel="icon" href="/favicon.ico" sizes="any" />
      </Head>
      <Providers>
        <body className={inter.className}>{children}</body>
      </Providers>
    </html>
  );
}
