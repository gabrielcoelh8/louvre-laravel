--
-- PostgreSQL database dump
--

-- Dumped from database version 15.1
-- Dumped by pg_dump version 15.1

-- Started on 2023-06-17 22:20:54

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 215 (class 1259 OID 32962)
-- Name: artista; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.artista (
    id integer NOT NULL,
    nome character varying(50) NOT NULL,
    data_nascimento date,
    url_imagem character varying(255) NOT NULL
);


ALTER TABLE public.artista OWNER TO postgres;

--
-- TOC entry 214 (class 1259 OID 32961)
-- Name: artista_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.artista_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.artista_id_seq OWNER TO postgres;

--
-- TOC entry 3402 (class 0 OID 0)
-- Dependencies: 214
-- Name: artista_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.artista_id_seq OWNED BY public.artista.id;


--
-- TOC entry 219 (class 1259 OID 32981)
-- Name: escultura; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.escultura (
    id integer NOT NULL,
    nome character varying(50) NOT NULL,
    material character varying(50) NOT NULL,
    descricao text NOT NULL,
    ano_lancamento integer,
    url_imagem character varying(255) NOT NULL,
    id_artista integer
);


ALTER TABLE public.escultura OWNER TO postgres;

--
-- TOC entry 218 (class 1259 OID 32980)
-- Name: escultura_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.escultura_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.escultura_id_seq OWNER TO postgres;

--
-- TOC entry 3403 (class 0 OID 0)
-- Dependencies: 218
-- Name: escultura_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.escultura_id_seq OWNED BY public.escultura.id;


--
-- TOC entry 226 (class 1259 OID 33054)
-- Name: failed_jobs; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);


ALTER TABLE public.failed_jobs OWNER TO postgres;

--
-- TOC entry 225 (class 1259 OID 33053)
-- Name: failed_jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.failed_jobs_id_seq OWNER TO postgres;

--
-- TOC entry 3404 (class 0 OID 0)
-- Dependencies: 225
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- TOC entry 221 (class 1259 OID 33029)
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO postgres;

--
-- TOC entry 220 (class 1259 OID 33028)
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO postgres;

--
-- TOC entry 3405 (class 0 OID 0)
-- Dependencies: 220
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- TOC entry 224 (class 1259 OID 33046)
-- Name: password_reset_tokens; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_reset_tokens OWNER TO postgres;

--
-- TOC entry 228 (class 1259 OID 33066)
-- Name: personal_access_tokens; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.personal_access_tokens OWNER TO postgres;

--
-- TOC entry 227 (class 1259 OID 33065)
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.personal_access_tokens_id_seq OWNER TO postgres;

--
-- TOC entry 3406 (class 0 OID 0)
-- Dependencies: 227
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;


--
-- TOC entry 217 (class 1259 OID 32969)
-- Name: pintura; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.pintura (
    id integer NOT NULL,
    nome character varying(50) NOT NULL,
    tecnica character varying(50) NOT NULL,
    ano_lancamento integer,
    url_imagem character varying(255) NOT NULL,
    id_artista integer
);


ALTER TABLE public.pintura OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 32968)
-- Name: pintura_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.pintura_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pintura_id_seq OWNER TO postgres;

--
-- TOC entry 3407 (class 0 OID 0)
-- Dependencies: 216
-- Name: pintura_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.pintura_id_seq OWNED BY public.pintura.id;


--
-- TOC entry 223 (class 1259 OID 33036)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 222 (class 1259 OID 33035)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- TOC entry 3408 (class 0 OID 0)
-- Dependencies: 222
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- TOC entry 3207 (class 2604 OID 32965)
-- Name: artista id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.artista ALTER COLUMN id SET DEFAULT nextval('public.artista_id_seq'::regclass);


--
-- TOC entry 3209 (class 2604 OID 32984)
-- Name: escultura id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.escultura ALTER COLUMN id SET DEFAULT nextval('public.escultura_id_seq'::regclass);


--
-- TOC entry 3212 (class 2604 OID 33057)
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- TOC entry 3210 (class 2604 OID 33032)
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- TOC entry 3214 (class 2604 OID 33069)
-- Name: personal_access_tokens id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);


--
-- TOC entry 3208 (class 2604 OID 32972)
-- Name: pintura id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pintura ALTER COLUMN id SET DEFAULT nextval('public.pintura_id_seq'::regclass);


--
-- TOC entry 3211 (class 2604 OID 33039)
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- TOC entry 3383 (class 0 OID 32962)
-- Dependencies: 215
-- Data for Name: artista; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.artista (id, nome, data_nascimento, url_imagem) FROM stdin;
3	John William Waterhouse	1849-04-06	iw8A04xhdCiupwvT9HUzO30HDy0ySzmvboEsQUlb.png
2	Leonardo da Vinci	1452-04-15	9IRoHCEz12oQmWqiUs8eG6ImD7HxPAtcQmwkicFc.jpg
4	Michelangelo di Lodovico Buonarroti Simoni	1475-03-06	rV7gss2FT7wjJ5xyLrWnLMqpO3PIsQoO1Ap8aWKg.jpg
1	Vincent van Gogh	1853-03-30	77weoI9E97VcXN9S551LHiwmxFlVKHWc4Q7ATNT8.jpg
\.


--
-- TOC entry 3387 (class 0 OID 32981)
-- Dependencies: 219
-- Data for Name: escultura; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.escultura (id, nome, material, descricao, ano_lancamento, url_imagem, id_artista) FROM stdin;
1	Pietà	Escultura em Mármore	A Pietà (em português Piedade) de Michelangelo é talvez a pietà mais conhecida e uma das mais famosas esculturas feitas pelo artista. Representa Jesus morto nos braços de sua mãe.	1499	zJkgxg7MwYYVvmtWBLCMif7BqmRqTmvyEAr2sMyy.jpg	4
2	San Pietro in Vincoli	Escultura em Mármore	Faz parte da decoração da Arca de São Domingo, na Basílica de São Domingo em Bolonha.	1494	j9sOl04lEvMins3hwyD1KFE5akqbz6LKxo6VcvoH.jpg	4
3	Tumba de Júlio II	Escultura em Mármore	A Tumba de Júlio II é um conjunto decorativo e arquitetônico concebido pelo artista italiano Michelangelo, encomendado primeiramente em 1505 e finalizado em 1545 para servir de mausoléu ao Papa Júlio II.	1545	7AloR6QuDT8zYIAZaq5LNKVOmygFDANIjVCAf2s7.jpg	4
\.


--
-- TOC entry 3394 (class 0 OID 33054)
-- Dependencies: 226
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- TOC entry 3389 (class 0 OID 33029)
-- Dependencies: 221
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.migrations (id, migration, batch) FROM stdin;
1	2014_10_12_000000_create_users_table	1
2	2014_10_12_100000_create_password_reset_tokens_table	1
3	2019_08_19_000000_create_failed_jobs_table	1
4	2019_12_14_000001_create_personal_access_tokens_table	1
\.


--
-- TOC entry 3392 (class 0 OID 33046)
-- Dependencies: 224
-- Data for Name: password_reset_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
\.


--
-- TOC entry 3396 (class 0 OID 33066)
-- Dependencies: 228
-- Data for Name: personal_access_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 3385 (class 0 OID 32969)
-- Dependencies: 217
-- Data for Name: pintura; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.pintura (id, nome, tecnica, ano_lancamento, url_imagem, id_artista) FROM stdin;
1	Os Comedores de Batata	Tinta a óleo	1885	FhxY3OU6DuU9FFuBQyqgSGpMCew4JkxA4Ig7TeKD.jpg	1
2	A Anunciação	Têmpera, Tinta a óleo	1472	r28QZ9vdiVuj7np90KUBL5GcyQye0ug6iewGiXaP.jpg	2
3	Gather Ye Rosebuds While Ye May	Tinta a óleo	1909	4sGBwKBwA1wyb1UAQ2jQVSU7I4PZMx7uCa8cHIlc.jpg	3
\.


--
-- TOC entry 3391 (class 0 OID 33036)
-- Dependencies: 223
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
1	admin	admin@gmail.com	\N	$2y$10$CttJ22v6RPSlZVoFmuKfl.9BliL8ucsUMpgDo2.uvq07lNFLKyASS	\N	2023-06-18 02:11:22	2023-06-18 02:11:22
\.


--
-- TOC entry 3409 (class 0 OID 0)
-- Dependencies: 214
-- Name: artista_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.artista_id_seq', 6, true);


--
-- TOC entry 3410 (class 0 OID 0)
-- Dependencies: 218
-- Name: escultura_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.escultura_id_seq', 4, true);


--
-- TOC entry 3411 (class 0 OID 0)
-- Dependencies: 225
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- TOC entry 3412 (class 0 OID 0)
-- Dependencies: 220
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 4, true);


--
-- TOC entry 3413 (class 0 OID 0)
-- Dependencies: 227
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);


--
-- TOC entry 3414 (class 0 OID 0)
-- Dependencies: 216
-- Name: pintura_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.pintura_id_seq', 7, true);


--
-- TOC entry 3415 (class 0 OID 0)
-- Dependencies: 222
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 1, true);


--
-- TOC entry 3216 (class 2606 OID 32967)
-- Name: artista artista_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.artista
    ADD CONSTRAINT artista_pkey PRIMARY KEY (id);


--
-- TOC entry 3220 (class 2606 OID 32988)
-- Name: escultura escultura_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.escultura
    ADD CONSTRAINT escultura_pkey PRIMARY KEY (id);


--
-- TOC entry 3230 (class 2606 OID 33062)
-- Name: failed_jobs failed_jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);


--
-- TOC entry 3232 (class 2606 OID 33064)
-- Name: failed_jobs failed_jobs_uuid_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);


--
-- TOC entry 3222 (class 2606 OID 33034)
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- TOC entry 3228 (class 2606 OID 33052)
-- Name: password_reset_tokens password_reset_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);


--
-- TOC entry 3234 (class 2606 OID 33073)
-- Name: personal_access_tokens personal_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);


--
-- TOC entry 3236 (class 2606 OID 33076)
-- Name: personal_access_tokens personal_access_tokens_token_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);


--
-- TOC entry 3218 (class 2606 OID 32974)
-- Name: pintura pintura_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pintura
    ADD CONSTRAINT pintura_pkey PRIMARY KEY (id);


--
-- TOC entry 3224 (class 2606 OID 33045)
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- TOC entry 3226 (class 2606 OID 33043)
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- TOC entry 3237 (class 1259 OID 33074)
-- Name: personal_access_tokens_tokenable_type_tokenable_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);


--
-- TOC entry 3239 (class 2606 OID 32989)
-- Name: escultura escultura_id_artista_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.escultura
    ADD CONSTRAINT escultura_id_artista_fkey FOREIGN KEY (id_artista) REFERENCES public.artista(id);


--
-- TOC entry 3238 (class 2606 OID 32975)
-- Name: pintura pintura_id_artista_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.pintura
    ADD CONSTRAINT pintura_id_artista_fkey FOREIGN KEY (id_artista) REFERENCES public.artista(id);


-- Completed on 2023-06-17 22:20:56

--
-- PostgreSQL database dump complete
--

