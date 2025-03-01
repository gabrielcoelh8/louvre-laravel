PGDMP     .                    {            louvre    15.1    15.1                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    32960    louvre    DATABASE     }   CREATE DATABASE louvre WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Portuguese_Brazil.1252';
    DROP DATABASE louvre;
                postgres    false            �            1259    32962    artista    TABLE     �   CREATE TABLE public.artista (
    id integer NOT NULL,
    nome character varying(50) NOT NULL,
    data_nascimento date,
    url_imagem character varying(255) NOT NULL
);
    DROP TABLE public.artista;
       public         heap    postgres    false            �            1259    32961    artista_id_seq    SEQUENCE     �   CREATE SEQUENCE public.artista_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.artista_id_seq;
       public          postgres    false    215                       0    0    artista_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.artista_id_seq OWNED BY public.artista.id;
          public          postgres    false    214            �            1259    32981 	   escultura    TABLE       CREATE TABLE public.escultura (
    id integer NOT NULL,
    nome character varying(50) NOT NULL,
    material character varying(50) NOT NULL,
    descricao text NOT NULL,
    ano_lancamento integer,
    url_imagem character varying(255) NOT NULL,
    id_artista integer
);
    DROP TABLE public.escultura;
       public         heap    postgres    false            �            1259    32980    escultura_id_seq    SEQUENCE     �   CREATE SEQUENCE public.escultura_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.escultura_id_seq;
       public          postgres    false    219                       0    0    escultura_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.escultura_id_seq OWNED BY public.escultura.id;
          public          postgres    false    218            �            1259    32969    pintura    TABLE     �   CREATE TABLE public.pintura (
    id integer NOT NULL,
    nome character varying(50) NOT NULL,
    tecnica character varying(50) NOT NULL,
    ano_lancamento integer,
    url_imagem character varying(255) NOT NULL,
    id_artista integer
);
    DROP TABLE public.pintura;
       public         heap    postgres    false            �            1259    32968    pintura_id_seq    SEQUENCE     �   CREATE SEQUENCE public.pintura_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.pintura_id_seq;
       public          postgres    false    217                       0    0    pintura_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.pintura_id_seq OWNED BY public.pintura.id;
          public          postgres    false    216            o           2604    32965 
   artista id    DEFAULT     h   ALTER TABLE ONLY public.artista ALTER COLUMN id SET DEFAULT nextval('public.artista_id_seq'::regclass);
 9   ALTER TABLE public.artista ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    214    215            q           2604    32984    escultura id    DEFAULT     l   ALTER TABLE ONLY public.escultura ALTER COLUMN id SET DEFAULT nextval('public.escultura_id_seq'::regclass);
 ;   ALTER TABLE public.escultura ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    219    218    219            p           2604    32972 
   pintura id    DEFAULT     h   ALTER TABLE ONLY public.pintura ALTER COLUMN id SET DEFAULT nextval('public.pintura_id_seq'::regclass);
 9   ALTER TABLE public.pintura ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    216    217            	          0    32962    artista 
   TABLE DATA           H   COPY public.artista (id, nome, data_nascimento, url_imagem) FROM stdin;
    public          postgres    false    215   �                 0    32981 	   escultura 
   TABLE DATA           j   COPY public.escultura (id, nome, material, descricao, ano_lancamento, url_imagem, id_artista) FROM stdin;
    public          postgres    false    219   �                 0    32969    pintura 
   TABLE DATA           \   COPY public.pintura (id, nome, tecnica, ano_lancamento, url_imagem, id_artista) FROM stdin;
    public          postgres    false    217   �                   0    0    artista_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.artista_id_seq', 6, true);
          public          postgres    false    214                       0    0    escultura_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.escultura_id_seq', 4, true);
          public          postgres    false    218                       0    0    pintura_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.pintura_id_seq', 7, true);
          public          postgres    false    216            s           2606    32967    artista artista_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.artista
    ADD CONSTRAINT artista_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.artista DROP CONSTRAINT artista_pkey;
       public            postgres    false    215            w           2606    32988    escultura escultura_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.escultura
    ADD CONSTRAINT escultura_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.escultura DROP CONSTRAINT escultura_pkey;
       public            postgres    false    219            u           2606    32974    pintura pintura_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.pintura
    ADD CONSTRAINT pintura_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.pintura DROP CONSTRAINT pintura_pkey;
       public            postgres    false    217            y           2606    32989 #   escultura escultura_id_artista_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.escultura
    ADD CONSTRAINT escultura_id_artista_fkey FOREIGN KEY (id_artista) REFERENCES public.artista(id);
 M   ALTER TABLE ONLY public.escultura DROP CONSTRAINT escultura_id_artista_fkey;
       public          postgres    false    215    219    3187            x           2606    32975    pintura pintura_id_artista_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.pintura
    ADD CONSTRAINT pintura_id_artista_fkey FOREIGN KEY (id_artista) REFERENCES public.artista(id);
 I   ALTER TABLE ONLY public.pintura DROP CONSTRAINT pintura_id_artista_fkey;
       public          postgres    false    215    217    3187            	     x��I��0��qXE6�'t��(6�5�	��y��K���߫��Ǣ(DR�8iy�ó�H�{F�Y �[1�<]�g�w��^ǓN�Ջ�.c��`���6�d�h�� �:�&8�	��6Y��l���zT5��!��ŷ�\Qw8;-��O��߫L1�A����x���!�N0�_�)RC+�E� �5gD��͚Fۄ������ױ��ꤟ�&���TV�ODE�H.[�%o!���M}�t�(�9x�ڦ�9��T}W��)��3#�Nx��;W���j1         �  x�uR�n�@]����V�P <��Py8I	����bf�<̌�	��VYT��]W���zRUQ����:��i7��շ`hc'rg����n�6,ᔆw�f��.u�O�����L�J��P=A��`% d�V��B�Ֆ�<���$B���ؠԖ�o?A���d~����0g�a��a¬�nb�Aik��z��u�zd������rr�>���~�Z2�ܟ]F|����|���a�����.K�V�ܢ:^l4pK�b-�ڌ����1:�v��Ө�C{n}<В�T��B裭~	�:�G�� ��H��z�Z��İ�����à1�x�_����Aw�q�?>��N��s'��5��o����;��i�	{:(�1#�����o�c�b��~��k���/~�0Q2E�������t#N��y�l���җ�V�K�`�)��D%:�E�� 5�`����^�tC��On��P���ܷgW��<��Ax5�-/�M�v���Z��j�.         �   x�]�ON�@F�3����-���X��q3�_`�#�y\���\���������d��Ӝ!k:�IĦ��z������Ɇ�Dn1�M�Z��t]nG�3�ym���=}L���z�zQ�9���,bռN�����﹅�>�;��+�S��h~el�K�nM)H�祗�H�����cot{�+XE
���K�Ég=y-X�KH�}�)�H�={�ђGq�+R�h�Kt_��I�5�G�Jo*~_`�/��^9     