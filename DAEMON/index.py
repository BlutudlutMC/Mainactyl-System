import docker
client = docker.DockerClient()

bedrock = client.containers.run("marctv/minecraft-papermc-server:1.16", ports={'3000/tcp': 3000}, mem_limit="1g", working_dir="/root/blutudaemon/mcserver:/data:rw")
for log in bedrock.logs(stream=True):
    print(log)